var $$ = function(id) {
    try {
        return document.getElementById(id)
    } catch (err) {
        $err(err);
    }
};

function nextPrev(n) {
    // This function will figure out which tab to display
    var x = document.getElementsByClassName("tab");
    // Exit the function if any field in the current tab is invalid:
    //if (n == 1 && !validateForm()) return false;
    // Hide the current tab:
    x[currentTab].style.display = "none";
    // Increase or decrease the current tab by 1:
    currentTab = currentTab + n;
    if (currentTab === 0) {
        $(document).ready(function() {
            $("#nextBtn").attr("disabled", true);
        });
        //alert("Hola");
    }
    showTab(currentTab);
}

function showTab(n) {
    if (n == 0) {
        var x = document.getElementsByClassName("tab");
        x[n].style.display = "block";
        $(document).ready(function() {
            $("#nextBtn").attr("disabled", true);
        });
    } else if (n == 1) {
        var x = document.getElementsByClassName("tab");
        x[n].style.display = "block";
        $(document).ready(function() {
            $("#nextBtn").css("display", "none");
        });
    }
    fixStepIndicator(n)
}

function fixStepIndicator(n) {
    // This function removes the "active" class of all steps...
    var i, x = document.getElementsByClassName("step");
    for (i = 0; i < x.length; i++) {
        x[i].className = x[i].className.replace(" active", "");
    }
    //... and adds the "active" class on the current step:
    x[n].className += " active";
}

function validaCurp() {

    /* alert(token); */
    var curp = $("#curp").val();
    var nombreProceso = $("#nombre_proceso").val();

    $.ajax({

        type: 'POST',
        dataType: 'json',
        data: {
            "_token": $("meta[name='csrf-token']").attr("content"),
            "curp": curp,
            "nombreProceso": nombreProceso
        },
        url: url + 'webservicerenapo',
        success: function(data) {
            if (data.ok) {
                if (data.Exist) {
                    Swal.fire({
                        icon: 'warning',
                        title: data.result,
                        showConfirmButton: true,
                        timer: 10000,
                        allowOutsideClick: true
                    });
                    $("#nextBtn").attr("disabled", true);
                    return;
                }
                if (data.warning) {
                    $("#nextBtn").attr("disabled", true);
                    Swal.fire({
                        icon: 'warning',
                        title: 'Estimado usuario\nel menor no puede ser registrado debido a que\nno ha iniciado su Preinscripción',
                        showConfirmButton: true,
                        allowOutsideClick: true
                    });
                } else {
                    if (validaCurpNinoMenorCincoAniosyMedio(data.datas.user.fechNac)) {
                        //valida que menor tenga menor o igual de 5 años y 11 meses
                        $("#nombre_menor_1").val(data.datas.user.nombre);
                        $("#apellido_paterno_1").val(data.datas.user.apellido1);
                        $("#apellido_materno_1").val(data.datas.user.apellido2);
                        var partesFechaForm = data.datas.user.fechNac.split('/');
                        var fecha = partesFechaForm[1] + '/' + partesFechaForm[0] + '/' + partesFechaForm[2];
                        //console.log(typeof(fecha));
                        $("#birthday").val(fecha);
                        $("#curp_num").val(curp);
                        //valida la edad del menor exactamente con decimales ejemplo 2.5
                        difMes = mesActual - mesMenor;
                        //console.log("algo", difMes, mesActual, mesMenor);
                        if (difMes < 0) {
                            var anioReal = (anioActual - anioMenor) - 1;
                        } else if (difMes >= 0) {
                            var anioReal = (anioActual - anioMenor);
                        }
                        //console.log("modulo", numeroDeMeses % 12);
                        //console.log("años", anioReal + '.' + numeroDeMeses % 12);
                        var anioConMeses = anioReal + '.' + numeroDeMeses % 12;
                        //setea campo de edad con decimales a input
                        $("#Edad_menor").val(anioConMeses);
                        $("#nextBtn").attr("disabled", false);
                        //obtiene el caci del menor para plancharlo en la vista
                        $("#caci_menor_inscrito").val(data.datas.caci);
                        /* alert("La curp ingresada ha sido validada correctamente"); */
                        Swal.fire({
                            icon: 'success',
                            title: 'La curp ingresada ha sido validada correctamente',
                            showConfirmButton: true,
                            allowOutsideClick: true
                        });
                    } else {
                        $("#nextBtn").attr("disabled", true);
                        /* alert("Estimado usuario\nel menor no puede ser registrado debido a que\nsupera la edad límite permitida"); */
                        Swal.fire({
                            icon: 'warning',
                            title: 'Estimado usuario\nel menor no puede ser registrado debido a que\nsupera la edad límite permitida',
                            showConfirmButton: true,
                            allowOutsideClick: true
                        });
                    }
                }
            }
        },
        error: function(data_e) {
            console.log(data_e);
            /* alert("La Curp ingresada no es válida"); */
            Swal.fire({
                icon: 'warning',
                title: 'La Curp ingresada no es válida',
                showConfirmButton: true,
                allowOutsideClick: true
            });
        }
    });

    function validaCurpNinoMenorCincoAniosyMedio(dataFecha) {
        partesFecha = dataFecha.split('/');
        fechaMenor = new Date(partesFecha[2], partesFecha[1] - 1, partesFecha[0]);
        /* var fechaMenor = new Date(2019,1-1,25); */
        fechaActual = new Date();
        /* console.log("año menor",fechaMenor); */
        anioMenor = fechaMenor.getFullYear();
        anioActual = fechaActual.getFullYear();
        mesMenor = fechaMenor.getMonth();
        mesActual = fechaActual.getMonth();
        //mesSustraccion = mesActual - mesMenor;
        numeroDeMeses = (anioActual - anioMenor) * 12 + mesActual - mesMenor;
        //console.log("num de meses", numeroDeMeses);
        if (numeroDeMeses > 71) {
            return false;
            //return true;
        } else {
            return true;
            //return false;
        }

    }
}

function preinscripcion() {
    var form_data = new FormData();

    form_data.append("_token", $("meta[name='csrf-token']").attr("content"));
    form_data.append("rfc", $("#rfc_tutor").val());
    form_data.append("nombre_tutor_madres", $("#nombre_tutor_madres").val());
    form_data.append("apellido_paterno_tutor", $("#apellido_paterno_tutor").val());
    form_data.append("apellido_materno_tutor", $("#apellido_materno_tutor").val());
    form_data.append("calle", $("#calle").val());
    form_data.append("numero_domicilio", $("#numero_domicilio").val());
    form_data.append("colonia", $("#colonia").val());
    form_data.append("alcaldia", $("#alcaldia").val());
    form_data.append("codigo_postal", $("#codigo_postal").val());

    form_data.append("tipo_nomina_1", $("#tipo_nomina_1").val());
    form_data.append("num_empleado_1", $("#num_empleado_1").val());
    form_data.append("num_plaza_1", $("#num_plaza_1").val());
    form_data.append("clave_dependencia_1", $("#clave_dependencia_1").val());
    form_data.append("nivel_salarial_1", $("#nivel_salarial_1").val());
    form_data.append("seccion_sindical_1", $("#seccion_sindical_1").val());
    form_data.append("horario_laboral_ent", $("#horario_laboral_ent").val());
    form_data.append("horario_laboral_sal", $("#horario_laboral_sal").val());
    form_data.append("caci", $("#caci").val());
    form_data.append("email_correo", $("#email_correo").val());
    form_data.append("telefono_celular", $("#telefono_celular").val());
    form_data.append("telefono_3", $("#telefono_3").val());
    form_data.append("nombre_menor_1", $("#nombre_menor_1").val());
    form_data.append("apellido_paterno_1", $("#apellido_paterno_1").val());
    form_data.append("apellido_materno_1", $("#apellido_materno_1").val());
    form_data.append("curp_num", $("#curp_num").val());
    form_data.append("birthday", $("#birthday").val());
    form_data.append("Edad_menor", $("#Edad_menor").val());
    form_data.append("terminos", $("#terminos").val());
    form_data.append("status", '1');

    var dato_archivo_act = $('#filename_act').prop("files")[0];
    var dato_archivo_nac = $('#filename_nac').prop("files")[0];
    var dato_archivo_vacu = $('#filename_vacu').prop("files")[0];
    var dato_archivo_com = $('#filename_com').prop("files")[0];
    var dato_archivo_disc = $('#filename_disc').prop("files")[0];
    var dato_archivo_trab = $('#filename_trab').prop("files")[0];

    var dato_archivo_credencial = $('#filename_credencial').prop("files")[0];
    var dato_archivo_gafete = $('#filename_gafete').prop("files")[0];
    var dato_archivo_solicitud = $('#filename_solicitud').prop("files")[0];
    var dato_archivo_carta = $('#filename_carta').prop("files")[0];
    var dato_archivo_sol_anali = $('#filename_sol_anali').prop("files")[0];
    /* var dato_archivo_compr_pago = $('#filename_compr_pago').prop("files")[0]; */
    //console.log("esto tiene", dato_archivo_act.size);
    //var dato_archivo = document.getElementById('filename_act');
    //console.log(dato_archivo);
    //var dato_archi = dato_archivo.files[0];
    if (dato_archivo_disc !== undefined) {
        form_data.append("filename_disc", dato_archivo_disc);
    }
    if (dato_archivo_trab !== undefined) {
        form_data.append("filename_trab", dato_archivo_trab);
    }
    form_data.append("filename_nac", dato_archivo_nac);
    form_data.append("filename_act", dato_archivo_act);
    form_data.append("filename_vacu", dato_archivo_vacu);
    form_data.append("filename_com", dato_archivo_com);

    form_data.append("filename_credencial", dato_archivo_credencial);
    form_data.append("filename_gafete", dato_archivo_gafete);
    form_data.append("filename_solicitud", dato_archivo_solicitud);
    form_data.append("filename_carta", dato_archivo_carta);
    form_data.append("filename_sol_anali", dato_archivo_sol_anali);
    /* form_data.append("filename_compr_pago", dato_archivo_compr_pago); */

    $.ajax({
        type: 'POST',
        dataType: 'json',
        data: form_data,
        processData: false,
        contentType: false,
        url: url + 'guardar_inscripcion_bd',
        beforeSend: function() {
            Swal.fire({
                title: "Enviando...",
                text: "Por favor, Espere.",
                imageUrl: "https://brave.zone/wp-content/themes/brave/assets/images/ajax_loader.gif",
                showConfirmButton: false,
                allowOutsideClick: false
            });
        },
        success: function(data) {
            console.log(data);
            if (data.ok) {
                if (data.Exist) {
                    Swal.fire({
                        icon: 'warning',
                        title: data.result,
                        showConfirmButton: false,
                        timer: 10000,
                        allowOutsideClick: false
                    }).then((result) => {
                        if (result.dismiss === Swal.DismissReason.timer) {
                            location.href = url + 'preinscripcion_validar_rfc';
                        }
                    });
                    return;
                }
                Swal.fire({
                    icon: 'success',
                    title: 'Su solicitud se ha registrado en el sistema, en breve recibirá un correo electrónico referente al registro de su solicitud',
                    showConfirmButton: false,
                    timer: 10000,
                    allowOutsideClick: false
                }).then((result) => {
                    if (result.dismiss === Swal.DismissReason.timer) {
                        $("#new_reminder").modal("hide");
                        location.href = url + 'inicio';
                        //document.getElementById("regForm").submit();
                    }
                });
            } else {
                if (data.err_valid) {
                    Swal.fire({
                        icon: 'error',
                        title: '¡Error, Validaciones!',
                        text: data.result,
                        showConfirmButton: true,
                        allowOutsideClick: false
                    }).then((result) => {
                        /* if (result.dismiss === Swal.DismissReason.timer) {
                            location.href = url + 'inscripcion_from';
                        } */
                    });
                    return;
                }
                if (data.err_valid_docs) {
                    Swal.fire({
                        icon: 'error',
                        title: '¡Error en Documentos, Validaciones!',
                        text: data.result,
                        showConfirmButton: true,
                        allowOutsideClick: false
                    }).then((result) => {
                        /* if (result.dismiss === Swal.DismissReason.timer) {
                            location.href = url + 'inscripcion_from';
                        } */
                    });
                    return;
                }
                Swal.fire({
                    icon: 'error',
                    title: 'Error de Sistema!',
                    text: data.result,
                    showConfirmButton: false,
                    timer: 10000,
                    allowOutsideClick: false
                }).then((result) => {
                    if (result.dismiss === Swal.DismissReason.timer) {
                        location.href = url + 'preinscripcion_validar_rfc';
                    }
                });
            }
            //alert("Los Datos se Consultaron Correctamente");
        },
        complete: function(data) {
            /* $("#loader").hide(); */
            /* console.log("Pos se deberia de cerrar el loading"); */
        },
        error: function(data_e) {
            console.log(data_e);
            //alert("No se pudo inscribir");
        }
    });
}

function reinscripcion() {
    var form_data = new FormData();

    form_data.append("_token", $("meta[name='csrf-token']").attr("content"));
    form_data.append("rfc", $("#rfc_tutor").val());
    form_data.append("nombre_tutor", $("#nombre_tutor").val());
    form_data.append("ap_paterno_t", $("#ap_paterno_t").val());
    form_data.append("ap_materno_t", $("#ap_materno_t").val());
    form_data.append("calle", $("#calle").val());
    form_data.append("numero_domicilio", $("#numero_domicilio").val());
    form_data.append("colonia", $("#colonia").val());
    form_data.append("alcaldia", $("#alcaldia").val());
    form_data.append("codigo_postal", $("#codigo_postal").val());

    form_data.append("tipo_nomina", $("#tipo_nomina").val());
    form_data.append("num_empleado", $("#num_empleado").val());
    form_data.append("num_plaza", $("#num_plaza").val());
    form_data.append("clave_dependencia", $("#clave_dependencia").val());
    form_data.append("nivel_salarial", $("#nivel_salarial").val());
    form_data.append("seccion_sindical", $("#seccion_sindical").val());
    form_data.append("horario_laboral_ent", $("#horario_laboral_ent").val());
    form_data.append("horario_laboral_sal", $("#horario_laboral_sal").val());
    form_data.append("caci", $("#caci_menor_inscrito").val());
    form_data.append("email", $("#email").val());
    form_data.append("telefono_uno", $("#telefono_uno").val());
    form_data.append("telefono_dos", $("#telefono_dos").val());
    form_data.append("nombre_menor", $("#nombre_menor_1").val());
    form_data.append("ap_paterno", $("#apellido_paterno_1").val());
    form_data.append("ap_materno", $("#apellido_materno_1").val());
    form_data.append("curp", $("#curp_num").val());
    form_data.append("fecha_nacimiento", $("#birthday").val());
    form_data.append("edad_menor_ingreso", $("#Edad_menor").val());
    form_data.append("terminos", $("#terminos").val());
    form_data.append("status", '1');

    /* var dato_archivo_act = $('#filename_act').prop("files")[0]; */
    /* var dato_archivo_nac = $('#filename_nac').prop("files")[0]; */
    var dato_archivo_vacu = $('#filename_vacu').prop("files")[0];
    /* var dato_archivo_com = $('#filename_com').prop("files")[0]; */
    var dato_archivo_disc = $('#filename_disc').prop("files")[0];
    /* var dato_archivo_trab = $('#filename_trab').prop("files")[0]; */
    var dato_archivo_compr_pago = $('#filename_compr_pago').prop("files")[0];

    var dato_archivo_credencial = $('#filename_credencial').prop("files")[0];
    var dato_archivo_gafete = $('#filename_gafete').prop("files")[0];
    var dato_archivo_solicitud = $('#filename_solicitud').prop("files")[0];
    var dato_archivo_carta = $('#filename_carta').prop("files")[0];
    var dato_archivo_sol_anali = $('#filename_sol_anali').prop("files")[0];

    if (dato_archivo_disc !== undefined) {
        form_data.append("filename_disc", dato_archivo_disc);
    }
    /* if (dato_archivo_trab !== undefined) {
        form_data.append("filename_trab", dato_archivo_trab);
    } */
    /* form_data.append("filename_nac", dato_archivo_nac); */
    /* form_data.append("filename_act", dato_archivo_act); */
    form_data.append("filename_vacu", dato_archivo_vacu);
    /* form_data.append("filename_com", dato_archivo_com); */
    form_data.append("filename_compr_pago", dato_archivo_compr_pago);

    form_data.append("filename_credencial", dato_archivo_credencial);
    form_data.append("filename_gafete", dato_archivo_gafete);
    form_data.append("filename_solicitud", dato_archivo_solicitud);
    form_data.append("filename_carta", dato_archivo_carta);
    form_data.append("filename_sol_anali", dato_archivo_sol_anali);

    $.ajax({
        type: 'POST',
        dataType: 'json',
        data: form_data,
        processData: false,
        contentType: false,
        url: url + 'guardar_reinscripcion_bd',
        beforeSend: function() {
            Swal.fire({
                title: "Enviando...",
                text: "Por favor, Espere.",
                imageUrl: "https://brave.zone/wp-content/themes/brave/assets/images/ajax_loader.gif",
                showConfirmButton: false,
                allowOutsideClick: false
            });
        },
        success: function(data) {
            console.log(data);
            if (data.ok) {
                if (data.Exist) {
                    Swal.fire({
                        icon: 'warning',
                        title: data.result,
                        showConfirmButton: false,
                        timer: 10000,
                        allowOutsideClick: false
                    }).then((result) => {
                        if (result.dismiss === Swal.DismissReason.timer) {
                            location.href = url + 'reinscripcion';
                        }
                    });
                    return;
                }
                Swal.fire({
                    icon: 'success',
                    title: 'Su solicitud se ha registrado en el sistema, en breve recibirá un correo electrónico referente al registro de su solicitud',
                    showConfirmButton: false,
                    timer: 10000,
                    allowOutsideClick: false
                }).then((result) => {
                    if (result.dismiss === Swal.DismissReason.timer) {
                        $("#new_reminder").modal("hide");
                        location.href = url + 'inicio';
                        //document.getElementById("regForm").submit();
                    }
                });
            } else {
                if (data.err_valid) {
                    Swal.fire({
                        icon: 'error',
                        title: '¡Error de Validaciones!',
                        text: data.result,
                        showConfirmButton: true,
                        allowOutsideClick: false
                    }).then((result) => {
                        /* if (result.dismiss === Swal.DismissReason.timer) {
                            location.href = url + 'reinscripcion';
                        } */
                    });
                    return;
                }
                if (data.err_valid_docs) {
                    Swal.fire({
                        icon: 'error',
                        title: '¡Error en Documentos, Validaciones!',
                        text: data.result,
                        showConfirmButton: true,
                        allowOutsideClick: false
                    }).then((result) => {
                        /* if (result.dismiss === Swal.DismissReason.timer) {
                            location.href = url + 'reinscripcion';
                        } */
                    });
                    return;
                }
                Swal.fire({
                    icon: 'error',
                    title: 'Error de Sistema!',
                    text: data.result,
                    showConfirmButton: false,
                    timer: 10000,
                    allowOutsideClick: false
                }).then((result) => {
                    if (result.dismiss === Swal.DismissReason.timer) {
                        location.href = url + 'reinscripcion';
                    }
                });
            }
            //alert("Los Datos se Consultaron Correctamente");
        },
        complete: function(data) {
            /* $("#loader").hide(); */
            /* console.log("Pos se deberia de cerrar el loading"); */
        },
        error: function(data_e) {
            console.log(data_e);
            //alert("No se pudo inscribir");
        }
    });
}