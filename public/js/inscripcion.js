function editRepositorio(id, idRepositorio, idPersonaAutorizadaUno, idPersonaAutorizadaDos) {
    /* alert(idRepositorio + "  vas aa ctualizar " + idPersonaAutorizadaDos + " " + idPersonaAutorizadaUno); */
    var dataJsonRepo = getDataRepositoryFinal();
    updateRepositorio(id, idRepositorio, idPersonaAutorizadaUno, idPersonaAutorizadaDos, dataJsonRepo);
}

function editRepositorioReins(id, idRepositorio, idPersonaAutorizadaUno, idPersonaAutorizadaDos) {
    /* alert(idRepositorio + "  vas aa ctualizar " + idPersonaAutorizadaDos + " " + idPersonaAutorizadaUno); */
    var dataJsonRepo = getDataRepositoryFinal();
    updateRepositorioReins(id, idRepositorio, idPersonaAutorizadaUno, idPersonaAutorizadaDos, dataJsonRepo);
}

function updateRepositorio(id, idRepo, idPersoUno, idPersoDos, data) {
    $.ajax({
        type: 'POST',
        dataType: 'json',
        data: data,
        url: url + 'update_data_respositorio/' + idRepo,
        beforeSend: function() {
            Swal.fire({
                title: "Actualizando...",
                text: "Por favor, Espere.",
                imageUrl: "https://brave.zone/wp-content/themes/brave/assets/images/ajax_loader.gif",
                showConfirmButton: false,
                allowOutsideClick: false
            });
        },
        success: function(data) {
            console.log(data);
            if (data.ok) {
                var joinArrayPersons = getPersonasAutorizadas(idRepo);
                arrayPersons = new Array();
                arrayPersons.push(idPersoUno);
                arrayPersons.push(idPersoDos);
                updatePersonaAutorizada(arrayPersons, joinArrayPersons);
                Swal.fire({
                    icon: 'success',
                    title: 'Se Actualizo los datos del Repositorio Correctamente',
                    showConfirmButton: false,
                    timer: 4000,
                    allowOutsideClick: false
                }).then((result) => {
                    if (result.dismiss === Swal.DismissReason.timer) {
                        location.href = url + 'lista_documentos_inscr/' + id;
                    }
                });
            } else {
                //aqui van los msjs de las validaciones
                if (data.err_valid) {
                    Swal.fire({
                        icon: 'error',
                        title: '¡Error, Validaciones!',
                        text: data.result,
                        showConfirmButton: true,
                        allowOutsideClick: true
                    });
                    return;
                }
            }
        },
        error: function(data_e) {
            console.log(data_e);
            Swal.fire({
                icon: 'error',
                title: '¡No se Actualizo los datos del Repositorio!',
                text: data.result,
                showConfirmButton: true,
                allowOutsideClick: false
            });
        }
    });
}

function updateRepositorioReins(id, idRepo, idPersoUno, idPersoDos, data) {
    $.ajax({
        type: 'POST',
        dataType: 'json',
        data: data,
        url: url + 'update_data_respositorio_reinscripcion/' + idRepo,
        beforeSend: function() {
            Swal.fire({
                title: "Actualizando...",
                text: "Por favor, Espere.",
                imageUrl: "https://brave.zone/wp-content/themes/brave/assets/images/ajax_loader.gif",
                showConfirmButton: false,
                allowOutsideClick: false
            });
        },
        success: function(data) {
            console.log(data);
            if (data.ok) {
                var joinArrayPersons = getPersonasAutorizadasReins(idRepo);
                arrayPersons = new Array();
                arrayPersons.push(idPersoUno);
                arrayPersons.push(idPersoDos);
                updatePersonaAutorizada(arrayPersons, joinArrayPersons);
                Swal.fire({
                    icon: 'success',
                    title: 'Se Actualizo los datos del Repositorio Correctamente',
                    showConfirmButton: false,
                    timer: 4000,
                    allowOutsideClick: false
                }).then((result) => {
                    if (result.dismiss === Swal.DismissReason.timer) {
                        location.href = url + 'lista_documentos/' + id;
                    }
                });
            } else {
                //aqui van los msjs de las validaciones
                if (data.err_valid) {
                    Swal.fire({
                        icon: 'error',
                        title: '¡Error, Validaciones!',
                        text: data.result,
                        showConfirmButton: true,
                        allowOutsideClick: true
                    });
                    return;
                }
            }
        },
        error: function(data_e) {
            console.log(data_e);
            Swal.fire({
                icon: 'error',
                title: '¡No se Actualizo los datos del Repositorio!',
                text: data.result,
                showConfirmButton: true,
                allowOutsideClick: false
            });
        }
    });
}

function updatePersonaAutorizada(arrayIdPerso, joinArray) {
    var posIdPerso = -1;
    joinArray.forEach(element => {
        posIdPerso += 1;
        var idPA = arrayIdPerso[posIdPerso];
        var personaAutorizadaJSON = JSON.stringify(element);
        $.ajax({
            type: 'POST',
            dataType: 'json',
            data: {
                "_token": $("meta[name='csrf-token']").attr("content"),
                "personaAuth": personaAutorizadaJSON
            },
            url: url + 'update_persona_autorizada/' + idPA,
            success: function(data) {
                console.log(data);
                if (data.ok == false) {
                    //aqui van los msjs de las validaciones
                    if (data.err_valid) {
                        Swal.fire({
                            icon: 'error',
                            title: '¡Error, Validaciones!',
                            text: data.result,
                            showConfirmButton: true,
                            allowOutsideClick: true
                        });
                        return;
                    }
                }
            },
            error: function(data_e) {
                console.log(data_e);
                Swal.fire({
                    icon: 'error',
                    title: '¡No se Actualizo Persona Autorizada!',
                    text: data.result,
                    showConfirmButton: true,
                    allowOutsideClick: false
                });
            }
        });
    });
}

function enviaDatosRepositorio(id) {
    var dataJson = getDataRepositoryFinal();
    setDataRepositoryFinal(id, dataJson);
}

function enviaDatosRepositorioReins(id) {
    var dataJson = getDataRepositoryFinal();
    setDataRepositoryFinalReins(id, dataJson);
}

function setDataRepositoryFinal(id, data) {
    $.ajax({
        type: 'POST',
        dataType: 'json',
        data: data,
        url: url + 'set_data_respositorio',
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
                var joinArrayPersons = getPersonasAutorizadas(data.idRepositorio);
                setDataPersonaAutorizada(joinArrayPersons);
                Swal.fire({
                    icon: 'success',
                    title: 'Se Guardo los datos del Repositorio Correctamente',
                    showConfirmButton: false,
                    timer: 4000,
                    allowOutsideClick: false
                }).then((result) => {
                    if (result.dismiss === Swal.DismissReason.timer) {
                        location.href = url + 'lista_documentos_inscr/' + id;
                    }
                });
            } else {
                //aqui van los msjs de las validaciones
                if (data.err_valid) {
                    Swal.fire({
                        icon: 'error',
                        title: '¡Error, Validaciones!',
                        text: data.result,
                        showConfirmButton: true,
                        allowOutsideClick: true
                    });
                    return;
                }
            }
        },
        error: function(data_e) {
            console.log(data_e);
            Swal.fire({
                icon: 'error',
                title: '¡No se Guardo los datos del Repositorio!',
                text: data.result,
                showConfirmButton: true,
                allowOutsideClick: false
            });
        }
    });
}

function setDataPersonaAutorizada(joinArray) {
    joinArray.forEach(element => {
        var personaAutorizadaJSON = JSON.stringify(element);
        $.ajax({
            type: 'POST',
            dataType: 'json',
            data: {
                "_token": $("meta[name='csrf-token']").attr("content"),
                "personaAuth": personaAutorizadaJSON
            },
            url: url + 'set_persona_autorizada',
            success: function(data) {
                console.log(data);
                if (data.ok == false) {
                    //aqui van los msjs de las validaciones
                    if (data.err_valid) {
                        Swal.fire({
                            icon: 'error',
                            title: '¡Error, Validaciones!',
                            text: data.result,
                            showConfirmButton: true,
                            allowOutsideClick: true
                        });
                        return;
                    }
                }
                /* alert("Las personas autorizadas se insertaron Correctamente"); */
            },
            error: function(data_e) {
                console.log(data_e);
                Swal.fire({
                    icon: 'error',
                    title: '¡No se Guardo los datos de la Persona Autorizada!',
                    text: data.result,
                    showConfirmButton: true,
                    allowOutsideClick: false
                });
            }
        });
    });
}

function setDataRepositoryFinalReins(id, data) {
    $.ajax({
        type: 'POST',
        dataType: 'json',
        data: data,
        url: url + 'set_data_respositorio_reinscripcion',
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
                var joinArrayPersons = getPersonasAutorizadasReins(data.idRepositorio);
                setDataPersonaAutorizada(joinArrayPersons);
                Swal.fire({
                    icon: 'success',
                    title: 'Se Guardo los datos del Repositorio Correctamente',
                    showConfirmButton: false,
                    timer: 4000,
                    allowOutsideClick: false
                }).then((result) => {
                    if (result.dismiss === Swal.DismissReason.timer) {
                        location.href = url + 'lista_documentos/' + id;
                    }
                });
            } else {
                //aqui van los msjs de las validaciones
                if (data.err_valid) {
                    Swal.fire({
                        icon: 'error',
                        title: '¡Error, Validaciones!',
                        text: data.result,
                        showConfirmButton: true,
                        allowOutsideClick: true
                    });
                    return;
                }
                Swal.fire({
                    icon: 'error',
                    title: '¡No se Guardo los datos del Repositorio!',
                    showConfirmButton: true,
                    allowOutsideClick: false
                });
            }
        },
        error: function(data_e) {
            console.log(data_e);
            Swal.fire({
                icon: 'error',
                title: '¡No se Guardo los datos del Repositorio!',
                text: data.result,
                showConfirmButton: true,
                allowOutsideClick: false
            });
        }
    });
}

function getDataRepositoryFinal() {
    var inscripcion_menor_id = $("#idTutor").val();
    var caci = $("#caci").val();
    var detec_nutricion = $("#detec_nutricion").val();
    var fecha_preins = $("#fecha_preins").val();
    var matricula = $("#matricula").val();
    var grupo_nino = $("#grupo_nino").val();
    var fecha_baja_nino = $("#fecha_baja_nino").val();
    var fecha_cambio_caci = $("#fecha_cambio_caci").val();
    var nombre_comple_nino = $("#nombre_comple_nino").val();
    var edad_nino = $("#edad_nino").val();
    var curp_nino = $("#curp_nino").val();
    var fecha_nac_nino = $("#fecha_nac_nino").val();
    var genero_nino = $("#genero_nino").val();
    var entidad_naci_nino = $("#entidad_naci_nino").val();
    var anio_registro_nac_nino = $("#anio_registro_nac_nino").val();
    var alcaldia_registro_nino = $("#alcaldia_registro_nino").val();
    var num_acta_nac_nino = $("#num_acta_nac_nino").val();
    var libro_act_nac_nino = $("#libro_act_nac_nino").val();
    var domicilio_part_nino = $("#domicilio_part_nino").val();
    var numero_domici_nino = $("#numero_domici_nino").val();
    var colonia_nino = $("#colonia_nino").val();
    var alcaldia_nino = $("#alcaldia_nino").val();
    var codigo_postal_nino = $("#codigo_postal_nino").val();
    var telefono_recado_nino = $("#telefono_recado_nino").val();
    var discapacidad_nino = $("#discapacidad_nino").val();
    var padecimiento_nino = $("#padecimiento_nino").val();
    var necesidades_nino = $("#necesidades_nino").val();
    var institucion_nino = $("#institucion_nino").val();
    var derechohabiencia_nino = $("#derechohabiencia_nino").val();
    var alergia_nino = $("#alergia_nino").val();
    var grupo_sanguineo = $("#grupo_sanguineo").val();
    var nombre_completo_padre = $("#nombre_completo_padre").val();
    var rfc_padre = $("#rfc_padre").val();
    var curp_padre = $("#curp_padre").val();
    var genero_padre = $("#genero_padre").val();
    var entidad_nac_padre = $("#entidad_nac_padre").val();
    var fecha_nac_padre = $("#fecha_nac_padre").val();
    var edad_padre = $("#edad_padre").val();
    var edo_civil_padre = $("#edo_civil_padre").val();
    var nivel_escolar_padre = $("#nivel_escolar_padre").val();
    var conclusion_nive_esco_padre = $("#conclusion_nive_esco_padre").val();
    var parentesco_con_nino = $("#parentesco_con_nino").val();
    var domicilio_calle_padre = $("#domicilio_calle_padre").val();
    var numero_domici_padre = $("#numero_domici_padre").val();
    var colonia_padre = $("#colonia_padre").val();
    var alcaldia_padre = $("#alcaldia_padre").val();
    var codigo_postal_padre = $("#codigo_postal_padre").val();
    var tel_particular_padre = $("#tel_particular_padre").val();
    var tel_celular_padre = $("#tel_celular_padre").val();
    var tel_recados_padre = $("#tel_recados_padre").val();
    var email_padre = $("#email_padre").val();
    var clave_sector_padre = $("#clave_sector_padre").val();
    var ente_administrativo_padre = $("#ente_administrativo_padre").val();
    var nombre_unidad_administrativa_padre = $("#nombre_unidad_administrativa_padre").val();
    var clave_unidad_admin_padre = $("#clave_unidad_admin_padre").val();
    var area_adscripcion_padre = $("#area_adscripcion_padre").val();
    var descripcion_puesto_padre = $("#descripcion_puesto_padre").val();
    var funcion_real_padre = $("#funcion_real_padre").val();
    var domicilio_calle_laboral_padre = $("#domicilio_calle_laboral_padre").val();
    var num_laboral_padre = $("#num_laboral_padre").val();
    var colonia_laboral_padre = $("#colonia_laboral_padre").val();
    var alcaldia_laboral_padre = $("#alcaldia_laboral_padre").val();
    var codigo_postal_laboral_padre = $("#codigo_postal_laboral_padre").val();
    var telefono_laboral_padre = $("#telefono_laboral_padre").val();
    var extension_tel_laboral_padre = $("#extension_tel_laboral_padre").val();
    var tipo_nomina_laboral_padre = $("#tipo_nomina_laboral_padre").val();
    var num_empleado_laboral_padre = $("#num_empleado_laboral_padre").val();
    var num_plaza_laboral_padre = $("#num_plaza_laboral_padre").val();
    var nivel_salarial_laboral_padre = $("#nivel_salarial_laboral_padre").val();
    var seccion_sindical_laboral_padre = $("#seccion_sindical_laboral_padre").val();
    var horario_ent_laboral_padre = $("#horario_ent_laboral_padre").val();
    var horario_sal_laboral_padre = $("#horario_sal_laboral_padre").val();
    var dias_laborales_padre = $("#dias_laborales_padre").val();
    var nombre_segundo_empleo = $("#nombre_segundo_empleo").val();
    var horario_ent_laboral_segundo_empleo = $("#horario_ent_laboral_segundo_empleo").val();
    var horario_sal_laboral_segundo_empleo = $("#horario_sal_laboral_segundo_empleo").val();
    var dias_laborales_segundo_empleo = $("#dias_laborales_segundo_empleo").val();
    var telefono_laboral_segundo_empleo = $("#telefono_laboral_segundo_empleo").val();
    var extension_tel_laboral_segundo_empleo = $("#extension_tel_laboral_segundo_empleo").val();
    var domicilio_laboral_segundo_empleo = $("#domicilio_laboral_segundo_empleo").val();
    var num_domicilio_laboral_segundo_empleo = $("#num_domicilio_laboral_segundo_empleo").val();
    var colonia_laboral_segundo_empleo = $("#colonia_laboral_segundo_empleo").val();
    var alcaldia_laboral_segundo_empleo = $("#alcaldia_laboral_segundo_empleo").val();
    var codigo_postal_laboral_segundo_empleo = $("#codigo_postal_laboral_segundo_empleo").val();
    var ciclo_escolar = $("#ciclo_escolar").val();

    var dataJson = {
        "_token": $("meta[name='csrf-token']").attr("content"),
        "inscripcion_menor_id": inscripcion_menor_id,
        "caci": caci,
        "detec_nutricion": detec_nutricion,
        "fecha_preins": fecha_preins,
        "matricula": matricula,
        "grupo_nino": grupo_nino,
        "fecha_baja_nino": fecha_baja_nino,
        "fecha_cambio_caci": fecha_cambio_caci,
        "nombre_comple_nino": nombre_comple_nino,
        "edad_nino": edad_nino,
        "curp_nino": curp_nino,
        "fecha_nac_nino": fecha_nac_nino,
        "genero_nino": genero_nino,
        "entidad_naci_nino": entidad_naci_nino,
        "anio_registro_nac_nino": anio_registro_nac_nino,
        "alcaldia_registro_nino": alcaldia_registro_nino,
        "num_acta_nac_nino": num_acta_nac_nino,
        "libro_act_nac_nino": libro_act_nac_nino,
        "domicilio_part_nino": domicilio_part_nino,
        "numero_domici_nino": numero_domici_nino,
        "colonia_nino": colonia_nino,
        "alcaldia_nino": alcaldia_nino,
        "codigo_postal_nino": codigo_postal_nino,
        "telefono_recado_nino": telefono_recado_nino,
        "discapacidad_nino": discapacidad_nino,
        "padecimiento_nino": padecimiento_nino,
        "necesidades_nino": necesidades_nino,
        "institucion_nino": institucion_nino,
        "derechohabiencia_nino": derechohabiencia_nino,
        "alergia_nino": alergia_nino,
        "grupo_sanguineo": grupo_sanguineo,
        "nombre_completo_padre": nombre_completo_padre,
        "rfc_padre": rfc_padre,
        "curp_padre": curp_padre,
        "genero_padre": genero_padre,
        "entidad_nac_padre": entidad_nac_padre,
        "fecha_nac_padre": fecha_nac_padre,
        "edad_padre": edad_padre,
        "edo_civil_padre": edo_civil_padre,
        "nivel_escolar_padre": nivel_escolar_padre,
        "conclusion_nive_esco_padre": conclusion_nive_esco_padre,
        "parentesco_con_nino": parentesco_con_nino,
        "domicilio_calle_padre": domicilio_calle_padre,
        "numero_domici_padre": numero_domici_padre,
        "colonia_padre": colonia_padre,
        "alcaldia_padre": alcaldia_padre,
        "codigo_postal_padre": codigo_postal_padre,
        "tel_particular_padre": tel_particular_padre,
        "tel_celular_padre": tel_celular_padre,
        "tel_recados_padre": tel_recados_padre,
        "email_padre": email_padre,
        "clave_sector_padre": clave_sector_padre,
        "ente_administrativo_padre": ente_administrativo_padre,
        "nombre_unidad_administrativa_padre": nombre_unidad_administrativa_padre,
        "clave_unidad_admin_padre": clave_unidad_admin_padre,
        "area_adscripcion_padre": area_adscripcion_padre,
        "descripcion_puesto_padre": descripcion_puesto_padre,
        "funcion_real_padre": funcion_real_padre,
        "domicilio_calle_laboral_padre": domicilio_calle_laboral_padre,
        "num_laboral_padre": num_laboral_padre,
        "colonia_laboral_padre": colonia_laboral_padre,
        "alcaldia_laboral_padre": alcaldia_laboral_padre,
        "codigo_postal_laboral_padre": codigo_postal_laboral_padre,
        "telefono_laboral_padre": telefono_laboral_padre,
        "extension_tel_laboral_padre": extension_tel_laboral_padre,
        "tipo_nomina_laboral_padre": tipo_nomina_laboral_padre,
        "num_empleado_laboral_padre": num_empleado_laboral_padre,
        "num_plaza_laboral_padre": num_plaza_laboral_padre,
        "nivel_salarial_laboral_padre": nivel_salarial_laboral_padre,
        "seccion_sindical_laboral_padre": seccion_sindical_laboral_padre,
        "horario_ent_laboral_padre": horario_ent_laboral_padre,
        "horario_sal_laboral_padre": horario_sal_laboral_padre,
        "dias_laborales_padre": dias_laborales_padre,
        "nombre_segundo_empleo": nombre_segundo_empleo,
        "horario_ent_laboral_segundo_empleo": horario_ent_laboral_segundo_empleo,
        "horario_sal_laboral_segundo_empleo": horario_sal_laboral_segundo_empleo,
        "dias_laborales_segundo_empleo": dias_laborales_segundo_empleo,
        "telefono_laboral_segundo_empleo": telefono_laboral_segundo_empleo,
        "extension_tel_laboral_segundo_empleo": extension_tel_laboral_segundo_empleo,
        "domicilio_laboral_segundo_empleo": domicilio_laboral_segundo_empleo,
        "num_domicilio_laboral_segundo_empleo": num_domicilio_laboral_segundo_empleo,
        "colonia_laboral_segundo_empleo": colonia_laboral_segundo_empleo,
        "alcaldia_laboral_segundo_empleo": alcaldia_laboral_segundo_empleo,
        "codigo_postal_laboral_segundo_empleo": codigo_postal_laboral_segundo_empleo,
        "ciclo_escolar": ciclo_escolar
    }
    return dataJson;
}

function getPersonasAutorizadas(id) {
    //procesamiento de persona autorizada
    var datos_repositorio_final_pre_id = id;
    var nombre_comple_person_autorizada = $("#nombre_comple_person_autorizada").val();
    var entidad_nac_person_autorizada = $("#entidad_nac_person_autorizada").val();
    var fecha_nac_person_autorizada = $("#fecha_nac_person_autorizada").val();
    var edad_person_autorizada = $("#edad_person_autorizada").val();
    var genero_person_autorizada = $("#genero_person_autorizada").val();
    var curp_person_autorizada = $("#curp_person_autorizada").val();
    var nivel_escol_person_autorizada = $("#nivel_escol_person_autorizada").val();
    var concluido_nivel_esc_person_autorizada = $("#concluido_nivel_esc_person_autorizada").val();
    var parentesco_nino_person_autorizada = $("#parentesco_nino_person_autorizada").val();
    var domicilio_calle_person_autorizada = $("#domicilio_calle_person_autorizada").val();
    var numero_domicilio_person_autorizada = $("#numero_domicilio_person_autorizada").val();
    var colonia_person_autorizada = $("#colonia_person_autorizada").val();
    var alcaldia_person_autorizada = $("#alcaldia_person_autorizada").val();
    var codigo_postal_person_autorizada = $("#codigo_postal_person_autorizada").val();
    var tel_particular_person_autorizada = $("#tel_particular_person_autorizada").val();
    var tel_celular_person_autorizada = $("#tel_celular_person_autorizada").val();
    var email_person_autorizada = $("#email_person_autorizada").val();
    var ocupacion_person_autorizada = $("#ocupacion_person_autorizada").val();
    var domicilio_laboral_calle_person_autorizada = $("#domicilio_laboral_calle_person_autorizada").val();
    var numero_domicilio_laboral_person_autorizada = $("#numero_domicilio_laboral_person_autorizada").val();
    var colonia_laboral_person_autorizada = $("#colonia_laboral_person_autorizada").val();
    var alcaldia_laboral_person_autorizada = $("#alcaldia_laboral_person_autorizada").val();
    var codigo_postal_laboral_person_autorizada = $("#codigo_postal_laboral_person_autorizada").val();
    var tel_laboral_person_autorizada = $("#tel_laboral_person_autorizada").val();
    var extension_tel_laboral_person_autorizada = $("#extension_tel_laboral_person_autorizada").val();
    var arrayPersonaAutorizada = new Array();
    arrayPersonaAutorizada.push({
        "datos_repositorio_final_pre_id": datos_repositorio_final_pre_id,
        "nombre_comple_person_autorizada": nombre_comple_person_autorizada,
        "entidad_nac_person_autorizada": entidad_nac_person_autorizada,
        "fecha_nac_person_autorizada": fecha_nac_person_autorizada,
        "edad_person_autorizada": edad_person_autorizada,
        "genero_person_autorizada": genero_person_autorizada,
        "curp_person_autorizada": curp_person_autorizada,
        "nivel_escol_person_autorizada": nivel_escol_person_autorizada,
        "concluido_nivel_esc_person_autorizada": concluido_nivel_esc_person_autorizada,
        "parentesco_nino_person_autorizada": parentesco_nino_person_autorizada,
        "domicilio_calle_person_autorizada": domicilio_calle_person_autorizada,
        "numero_domicilio_person_autorizada": numero_domicilio_person_autorizada,
        "colonia_person_autorizada": colonia_person_autorizada,
        "alcaldia_person_autorizada": alcaldia_person_autorizada,
        "codigo_postal_person_autorizada": codigo_postal_person_autorizada,
        "tel_particular_person_autorizada": tel_particular_person_autorizada,
        "tel_celular_person_autorizada": tel_celular_person_autorizada,
        "email_person_autorizada": email_person_autorizada,
        "ocupacion_person_autorizada": ocupacion_person_autorizada,
        "domicilio_laboral_calle_person_autorizada": domicilio_laboral_calle_person_autorizada,
        "numero_domicilio_laboral_person_autorizada": numero_domicilio_laboral_person_autorizada,
        "colonia_laboral_person_autorizada": colonia_laboral_person_autorizada,
        "alcaldia_laboral_person_autorizada": alcaldia_laboral_person_autorizada,
        "codigo_postal_laboral_person_autorizada": codigo_postal_laboral_person_autorizada,
        "tel_laboral_person_autorizada": tel_laboral_person_autorizada,
        "extension_tel_laboral_person_autorizada": extension_tel_laboral_person_autorizada
    });
    //procesamiento de persona autorizada 2    
    var datos_repositorio_final_pre_id_dos = id;
    var nombre_comple_person_autorizada_dos = $("#nombre_comple_person_autorizada_dos").val();
    var entidad_nac_person_autorizada_dos = $("#entidad_nac_person_autorizada_dos").val();
    var fecha_nac_person_autorizada_dos = $("#fecha_nac_person_autorizada_dos").val();
    var edad_person_autorizada_dos = $("#edad_person_autorizada_dos").val();
    var genero_person_autorizada_dos = $("#genero_person_autorizada_dos").val();
    var curp_person_autorizada_dos = $("#curp_person_autorizada_dos").val();
    var nivel_escol_person_autorizada_dos = $("#nivel_escol_person_autorizada_dos").val();
    var concluido_nivel_esc_person_autorizada_dos = $("#concluido_nivel_esc_person_autorizada_dos").val();
    var parentesco_nino_person_autorizada_dos = $("#parentesco_nino_person_autorizada_dos").val();
    var domicilio_calle_person_autorizada_dos = $("#domicilio_calle_person_autorizada_dos").val();
    var numero_domicilio_person_autorizada_dos = $("#numero_domicilio_person_autorizada_dos").val();
    var colonia_person_autorizada_dos = $("#colonia_person_autorizada_dos").val();
    var alcaldia_person_autorizada_dos = $("#alcaldia_person_autorizada_dos").val();
    var codigo_postal_person_autorizada_dos = $("#codigo_postal_person_autorizada_dos").val();
    var tel_particular_person_autorizada_dos = $("#tel_particular_person_autorizada_dos").val();
    var tel_celular_person_autorizada_dos = $("#tel_celular_person_autorizada_dos").val();
    var email_person_autorizada_dos = $("#email_person_autorizada_dos").val();
    var ocupacion_person_autorizada_dos = $("#ocupacion_person_autorizada_dos").val();
    var domicilio_laboral_calle_person_autorizada_dos = $("#domicilio_laboral_calle_person_autorizada_dos").val();
    var numero_domicilio_laboral_person_autorizada_dos = $("#numero_domicilio_laboral_person_autorizada_dos").val();
    var colonia_laboral_person_autorizada_dos = $("#colonia_laboral_person_autorizada_dos").val();
    var alcaldia_laboral_person_autorizada_dos = $("#alcaldia_laboral_person_autorizada_dos").val();
    var codigo_postal_laboral_person_autorizada_dos = $("#codigo_postal_laboral_person_autorizada_dos").val();
    var tel_laboral_person_autorizada_dos = $("#tel_laboral_person_autorizada_dos").val();
    var extension_tel_laboral_person_autorizada_dos = $("#extension_tel_laboral_person_autorizada_dos").val();
    var arrayPersonaAutorizadaDos = new Array();
    arrayPersonaAutorizadaDos.push({
        "datos_repositorio_final_pre_id_dos": datos_repositorio_final_pre_id_dos,
        "nombre_comple_person_autorizada_dos": nombre_comple_person_autorizada_dos,
        "entidad_nac_person_autorizada_dos": entidad_nac_person_autorizada_dos,
        "fecha_nac_person_autorizada_dos": fecha_nac_person_autorizada_dos,
        "edad_person_autorizada_dos": edad_person_autorizada_dos,
        "genero_person_autorizada_dos": genero_person_autorizada_dos,
        "curp_person_autorizada_dos": curp_person_autorizada_dos,
        "nivel_escol_person_autorizada_dos": nivel_escol_person_autorizada_dos,
        "concluido_nivel_esc_person_autorizada_dos": concluido_nivel_esc_person_autorizada_dos,
        "parentesco_nino_person_autorizada_dos": parentesco_nino_person_autorizada_dos,
        "domicilio_calle_person_autorizada_dos": domicilio_calle_person_autorizada_dos,
        "numero_domicilio_person_autorizada_dos": numero_domicilio_person_autorizada_dos,
        "colonia_person_autorizada_dos": colonia_person_autorizada_dos,
        "alcaldia_person_autorizada_dos": alcaldia_person_autorizada_dos,
        "codigo_postal_person_autorizada_dos": codigo_postal_person_autorizada_dos,
        "tel_particular_person_autorizada_dos": tel_particular_person_autorizada_dos,
        "tel_celular_person_autorizada_dos": tel_celular_person_autorizada_dos,
        "email_person_autorizada_dos": email_person_autorizada_dos,
        "ocupacion_person_autorizada_dos": ocupacion_person_autorizada_dos,
        "domicilio_laboral_calle_person_autorizada_dos": domicilio_laboral_calle_person_autorizada_dos,
        "numero_domicilio_laboral_person_autorizada_dos": numero_domicilio_laboral_person_autorizada_dos,
        "colonia_laboral_person_autorizada_dos": colonia_laboral_person_autorizada_dos,
        "alcaldia_laboral_person_autorizada_dos": alcaldia_laboral_person_autorizada_dos,
        "codigo_postal_laboral_person_autorizada_dos": codigo_postal_laboral_person_autorizada_dos,
        "tel_laboral_person_autorizada_dos": tel_laboral_person_autorizada_dos,
        "extension_tel_laboral_person_autorizada_dos": extension_tel_laboral_person_autorizada_dos
    });
    var joinArray = arrayPersonaAutorizada.concat(arrayPersonaAutorizadaDos);
    return joinArray;
}

function getPersonasAutorizadasReins(id) {
    //procesamiento de persona autorizada
    var datos_repositorio_final_pre_id = id;
    var nombre_comple_person_autorizada = $("#nombre_comple_person_autorizada").val();
    var entidad_nac_person_autorizada = $("#entidad_nac_person_autorizada").val();
    var fecha_nac_person_autorizada = $("#fecha_nac_person_autorizada").val();
    var edad_person_autorizada = $("#edad_person_autorizada").val();
    var genero_person_autorizada = $("#genero_person_autorizada").val();
    var curp_person_autorizada = $("#curp_person_autorizada").val();
    var nivel_escol_person_autorizada = $("#nivel_escol_person_autorizada").val();
    var concluido_nivel_esc_person_autorizada = $("#concluido_nivel_esc_person_autorizada").val();
    var parentesco_nino_person_autorizada = $("#parentesco_nino_person_autorizada").val();
    var domicilio_calle_person_autorizada = $("#domicilio_calle_person_autorizada").val();
    var numero_domicilio_person_autorizada = $("#numero_domicilio_person_autorizada").val();
    var colonia_person_autorizada = $("#colonia_person_autorizada").val();
    var alcaldia_person_autorizada = $("#alcaldia_person_autorizada").val();
    var codigo_postal_person_autorizada = $("#codigo_postal_person_autorizada").val();
    var tel_particular_person_autorizada = $("#tel_particular_person_autorizada").val();
    var tel_celular_person_autorizada = $("#tel_celular_person_autorizada").val();
    var email_person_autorizada = $("#email_person_autorizada").val();
    var ocupacion_person_autorizada = $("#ocupacion_person_autorizada").val();
    var domicilio_laboral_calle_person_autorizada = $("#domicilio_laboral_calle_person_autorizada").val();
    var numero_domicilio_laboral_person_autorizada = $("#numero_domicilio_laboral_person_autorizada").val();
    var colonia_laboral_person_autorizada = $("#colonia_laboral_person_autorizada").val();
    var alcaldia_laboral_person_autorizada = $("#alcaldia_laboral_person_autorizada").val();
    var codigo_postal_laboral_person_autorizada = $("#codigo_postal_laboral_person_autorizada").val();
    var tel_laboral_person_autorizada = $("#tel_laboral_person_autorizada").val();
    var extension_tel_laboral_person_autorizada = $("#extension_tel_laboral_person_autorizada").val();
    var arrayPersonaAutorizada = new Array();
    arrayPersonaAutorizada.push({
        "datos_repositorio_final_reins_id": datos_repositorio_final_pre_id,
        "nombre_comple_person_autorizada": nombre_comple_person_autorizada,
        "entidad_nac_person_autorizada": entidad_nac_person_autorizada,
        "fecha_nac_person_autorizada": fecha_nac_person_autorizada,
        "edad_person_autorizada": edad_person_autorizada,
        "genero_person_autorizada": genero_person_autorizada,
        "curp_person_autorizada": curp_person_autorizada,
        "nivel_escol_person_autorizada": nivel_escol_person_autorizada,
        "concluido_nivel_esc_person_autorizada": concluido_nivel_esc_person_autorizada,
        "parentesco_nino_person_autorizada": parentesco_nino_person_autorizada,
        "domicilio_calle_person_autorizada": domicilio_calle_person_autorizada,
        "numero_domicilio_person_autorizada": numero_domicilio_person_autorizada,
        "colonia_person_autorizada": colonia_person_autorizada,
        "alcaldia_person_autorizada": alcaldia_person_autorizada,
        "codigo_postal_person_autorizada": codigo_postal_person_autorizada,
        "tel_particular_person_autorizada": tel_particular_person_autorizada,
        "tel_celular_person_autorizada": tel_celular_person_autorizada,
        "email_person_autorizada": email_person_autorizada,
        "ocupacion_person_autorizada": ocupacion_person_autorizada,
        "domicilio_laboral_calle_person_autorizada": domicilio_laboral_calle_person_autorizada,
        "numero_domicilio_laboral_person_autorizada": numero_domicilio_laboral_person_autorizada,
        "colonia_laboral_person_autorizada": colonia_laboral_person_autorizada,
        "alcaldia_laboral_person_autorizada": alcaldia_laboral_person_autorizada,
        "codigo_postal_laboral_person_autorizada": codigo_postal_laboral_person_autorizada,
        "tel_laboral_person_autorizada": tel_laboral_person_autorizada,
        "extension_tel_laboral_person_autorizada": extension_tel_laboral_person_autorizada
    });
    //procesamiento de persona autorizada 2    
    var datos_repositorio_final_pre_id_dos = id;
    var nombre_comple_person_autorizada_dos = $("#nombre_comple_person_autorizada_dos").val();
    var entidad_nac_person_autorizada_dos = $("#entidad_nac_person_autorizada_dos").val();
    var fecha_nac_person_autorizada_dos = $("#fecha_nac_person_autorizada_dos").val();
    var edad_person_autorizada_dos = $("#edad_person_autorizada_dos").val();
    var genero_person_autorizada_dos = $("#genero_person_autorizada_dos").val();
    var curp_person_autorizada_dos = $("#curp_person_autorizada_dos").val();
    var nivel_escol_person_autorizada_dos = $("#nivel_escol_person_autorizada_dos").val();
    var concluido_nivel_esc_person_autorizada_dos = $("#concluido_nivel_esc_person_autorizada_dos").val();
    var parentesco_nino_person_autorizada_dos = $("#parentesco_nino_person_autorizada_dos").val();
    var domicilio_calle_person_autorizada_dos = $("#domicilio_calle_person_autorizada_dos").val();
    var numero_domicilio_person_autorizada_dos = $("#numero_domicilio_person_autorizada_dos").val();
    var colonia_person_autorizada_dos = $("#colonia_person_autorizada_dos").val();
    var alcaldia_person_autorizada_dos = $("#alcaldia_person_autorizada_dos").val();
    var codigo_postal_person_autorizada_dos = $("#codigo_postal_person_autorizada_dos").val();
    var tel_particular_person_autorizada_dos = $("#tel_particular_person_autorizada_dos").val();
    var tel_celular_person_autorizada_dos = $("#tel_celular_person_autorizada_dos").val();
    var email_person_autorizada_dos = $("#email_person_autorizada_dos").val();
    var ocupacion_person_autorizada_dos = $("#ocupacion_person_autorizada_dos").val();
    var domicilio_laboral_calle_person_autorizada_dos = $("#domicilio_laboral_calle_person_autorizada_dos").val();
    var numero_domicilio_laboral_person_autorizada_dos = $("#numero_domicilio_laboral_person_autorizada_dos").val();
    var colonia_laboral_person_autorizada_dos = $("#colonia_laboral_person_autorizada_dos").val();
    var alcaldia_laboral_person_autorizada_dos = $("#alcaldia_laboral_person_autorizada_dos").val();
    var codigo_postal_laboral_person_autorizada_dos = $("#codigo_postal_laboral_person_autorizada_dos").val();
    var tel_laboral_person_autorizada_dos = $("#tel_laboral_person_autorizada_dos").val();
    var extension_tel_laboral_person_autorizada_dos = $("#extension_tel_laboral_person_autorizada_dos").val();
    var arrayPersonaAutorizadaDos = new Array();
    arrayPersonaAutorizadaDos.push({
        "datos_repositorio_final_reins_id_dos": datos_repositorio_final_pre_id_dos,
        "nombre_comple_person_autorizada_dos": nombre_comple_person_autorizada_dos,
        "entidad_nac_person_autorizada_dos": entidad_nac_person_autorizada_dos,
        "fecha_nac_person_autorizada_dos": fecha_nac_person_autorizada_dos,
        "edad_person_autorizada_dos": edad_person_autorizada_dos,
        "genero_person_autorizada_dos": genero_person_autorizada_dos,
        "curp_person_autorizada_dos": curp_person_autorizada_dos,
        "nivel_escol_person_autorizada_dos": nivel_escol_person_autorizada_dos,
        "concluido_nivel_esc_person_autorizada_dos": concluido_nivel_esc_person_autorizada_dos,
        "parentesco_nino_person_autorizada_dos": parentesco_nino_person_autorizada_dos,
        "domicilio_calle_person_autorizada_dos": domicilio_calle_person_autorizada_dos,
        "numero_domicilio_person_autorizada_dos": numero_domicilio_person_autorizada_dos,
        "colonia_person_autorizada_dos": colonia_person_autorizada_dos,
        "alcaldia_person_autorizada_dos": alcaldia_person_autorizada_dos,
        "codigo_postal_person_autorizada_dos": codigo_postal_person_autorizada_dos,
        "tel_particular_person_autorizada_dos": tel_particular_person_autorizada_dos,
        "tel_celular_person_autorizada_dos": tel_celular_person_autorizada_dos,
        "email_person_autorizada_dos": email_person_autorizada_dos,
        "ocupacion_person_autorizada_dos": ocupacion_person_autorizada_dos,
        "domicilio_laboral_calle_person_autorizada_dos": domicilio_laboral_calle_person_autorizada_dos,
        "numero_domicilio_laboral_person_autorizada_dos": numero_domicilio_laboral_person_autorizada_dos,
        "colonia_laboral_person_autorizada_dos": colonia_laboral_person_autorizada_dos,
        "alcaldia_laboral_person_autorizada_dos": alcaldia_laboral_person_autorizada_dos,
        "codigo_postal_laboral_person_autorizada_dos": codigo_postal_laboral_person_autorizada_dos,
        "tel_laboral_person_autorizada_dos": tel_laboral_person_autorizada_dos,
        "extension_tel_laboral_person_autorizada_dos": extension_tel_laboral_person_autorizada_dos
    });
    var joinArray = arrayPersonaAutorizada.concat(arrayPersonaAutorizadaDos);
    return joinArray;
}

function preinscripcion() {

    var form_data = new FormData();

    form_data.append("_token", $("meta[name='csrf-token']").attr("content"));
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

    var dato_archivo_act = $('#filename_act').prop("files")[0];
    var dato_archivo_nac = $('#filename_nac').prop("files")[0];
    var dato_archivo_vacu = $('#filename_vacu').prop("files")[0];
    var dato_archivo_com = $('#filename_com').prop("files")[0];
    var dato_archivo_disc = $('#filename_disc').prop("files")[0];
    var dato_archivo_trab = $('#filename_trab').prop("files")[0];
    //console.log("esto tiene", dato_archivo_disc, dato_archivo_trab);
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

    $.ajax({
        type: 'POST',
        dataType: 'json',
        data: form_data,
        processData: false,
        contentType: false,
        url: url + 'guardar_inscripcion_bd',
        success: function(data) {
            //console.log(data);
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
                            location.href = url + 'inscripcion_from';
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
                        title: 'Error, Validaciones!',
                        text: data.result,
                        showConfirmButton: false,
                        timer: 20000,
                        allowOutsideClick: false
                    }).then((result) => {
                        if (result.dismiss === Swal.DismissReason.timer) {
                            location.href = url + 'inscripcion_from';
                        }
                    });
                    return;
                }
                if (data.err_valid_docs) {
                    Swal.fire({
                        icon: 'error',
                        title: 'Error Documentos, Validaciones!',
                        text: data.result,
                        showConfirmButton: false,
                        timer: 10000,
                        allowOutsideClick: false
                    }).then((result) => {
                        if (result.dismiss === Swal.DismissReason.timer) {
                            location.href = url + 'inscripcion_from';
                        }
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
                        location.href = url + 'inscripcion_from';
                    }
                });
            }
            //alert("Los Datos se Consultaron Correctamente");
        },
        error: function(data_e) {
            console.log(data_e);
            //alert("No se pudo inscribir");
        }
    });

}

function generateExcel() {
    var excel_ciclo = $("#excel_ciclo_escolar").val();

    $.ajax({
        type: 'POST',
        dataType: 'json',
        data: {
            "_token": $("meta[name='csrf-token']").attr("content"),
            "excel_ciclo_escolar": excel_ciclo
        },
        url: url + 'export-excel',
        success: function(data) {
            console.log("holad");
        }
    })
}

function generateExcelReincripcion() {
    var excel_ciclo = $("#excel_ciclo_escolar").val();

    $.ajax({
        type: 'POST',
        dataType: 'json',
        data: {
            "_token": $("meta[name='csrf-token']").attr("content"),
            "excel_ciclo_escolar": excel_ciclo
        },
        url: url + 'export-excel-reinscripcion',
        success: function(result, status, xhr) {
            var disposition = xhr.getResponseHeader('content-disposition');
            var matches = /"([^"]*)"/.exec(disposition);
            var filename = (matches != null && matches[1] ? matches[1] : 'salary.xlsx');

            // The actual download
            var blob = new Blob([result], {
                type: 'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet'
            });
            var link = document.createElement('a');
            link.href = window.URL.createObjectURL(blob);
            link.download = filename;

            document.body.appendChild(link);

            link.click();
            document.body.removeChild(link);
            /* console.log(status.status); */
        }
    })
}

function showMsj(id_reg_solicitante, id_proceso) {
    /* alert($id_reg_solicitante); */
    $.ajax({
        type: 'GET',
        dataType: 'json',
        data: {
            "_token": $("meta[name='csrf-token']").attr("content"),
            "id": id_reg_solicitante,
            "id_proceso": id_proceso,
        },
        url: url + 'log_by_id',
        success: function(data) {
            console.log(data);
            if (data.ok) {
                Swal.fire({
                    icon: 'info',
                    title: 'Usuario que elimino el Registro',
                    text: data.result.nameUser,
                    showConfirmButton: true,
                    allowOutsideClick: false
                });
            }
        },
        error: function(data_e) {
            console.log(data_e);
        }
    });
}

function reinscripcion() {

    var form_data = new FormData();

    form_data.append("_token", $("meta[name='csrf-token']").attr("content"));
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
    form_data.append("caci", $("#caci").val());
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

    var dato_archivo_act = $('#filename_act').prop("files")[0];
    var dato_archivo_nac = $('#filename_nac').prop("files")[0];
    var dato_archivo_vacu = $('#filename_vacu').prop("files")[0];
    var dato_archivo_com = $('#filename_com').prop("files")[0];
    var dato_archivo_disc = $('#filename_disc').prop("files")[0];
    var dato_archivo_trab = $('#filename_trab').prop("files")[0];

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

    $.ajax({
        type: 'POST',
        dataType: 'json',
        data: form_data,
        processData: false,
        contentType: false,
        url: url + 'guardar_reinscripcion_bd',
        success: function(data) {
            //console.log(data);
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
                        title: 'Error, Validaciones!',
                        text: data.result,
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
                if (data.err_valid_docs) {
                    Swal.fire({
                        icon: 'error',
                        title: 'Error Documentos, Validaciones!',
                        text: data.result,
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
        error: function(data_e) {
            console.log(data_e);
            //alert("No se pudo inscribir");
        }
    });
}

function createUsuario() {
    var name = $("#name").val();
    var email = $("#email").val();
    var rol = $("#rol").val();
    var password = $("#password").val();

    $.ajax({
        type: 'POST',
        dataType: 'json',
        data: {
            "_token": $("meta[name='csrf-token']").attr("content"),
            "name": name,
            "email": email,
            "rol": rol,
            "password": password
        },
        url: url + 'store',
        success: function(data) {
            console.log(data);
            alert("Los Datos se Insertaron Correctamente");
        },
        error: function(data_e) {
            console.log(data_e);
            alert("No se pudo inscribir");
        }

    });
}

function editUsuario(id) {
    //alert(id);
    var name = $("#name").val();
    var email = $("#email").val();
    var rol = $("#rol").val();
    var password = $("#password").val();

    $.ajax({
        type: 'POST',
        dataType: 'json',
        data: {
            "_token": $("meta[name='csrf-token']").attr("content"),
            "id": id,
            "name": name,
            "email": email,
            "rol": rol,
            "password": password
        },
        url: url + 'update',
        success: function(data) {
            console.log(data);
            alert("Los Datos se Actualizaron Correctamente");
        },
        error: function(data_e) {
            console.log(data_e);
            alert("No se pudo Actualizar");
        }

    });
}

function createRol() {
    var name = $("#name").val();
    var permissions = $("#permissions").val();

    $.ajax({
        type: 'POST',
        dataType: 'json',
        data: {
            "_token": $("meta[name='csrf-token']").attr("content"),
            "name": name,
            "permissions": permissions
        },
        url: url + 'guardar_rol',
        success: function(data) {
            console.log(data);
            alert("Los Datos se Insertaron Correctamente");
        },
        error: function(data_e) {
            console.log(data_e);
            alert("No se pudo inscribir");
        }

    });
}

/***Funcion para edicion de un cliente**/
function editCaci(id, caci) {
    //alert(caci);
    var position_caci = null;
    $("#id_caci").val(id);
    $('#caciEdit').modal('show');

    switch (caci) {
        case 'Luz Maria Gomez Pezuela':
            position_caci = '0';
            break;
        case 'Mtra Eva Moreno Sanchez':
            position_caci = '1';
            break;
        case 'Bertha Von Glumer Leyva':
            position_caci = '2';
            break;
        case 'Carolina Agazzi':
            position_caci = '3';
            break;
        case 'Carmen S':
            position_caci = '4';
            break;
    }
    getIndexCaci(position_caci);
}

function getIndexCaci(position_caci) {
    document.getElementById("caci_nombre").selectedIndex = position_caci;
}

function actualizarCaci(token) {
    var id_caci = $("#id_caci").val();
    var caci_nombre = $("#caci_nombre").val();
    var tramite = $("#tramite").val();

    /* alert(id_caci); */
    $.ajax({

        type: 'POST',
        dataType: 'json',
        data: {
            "_token": token,
            "id": id_caci,
            "caci_nombre": caci_nombre,
            "tramite": tramite,
        },
        url: url + 'actualizar_caci',
        success: function(data) {
            if (data.ok) {
                Swal.fire({
                    icon: 'success',
                    title: 'Actualización',
                    text: data.result,
                    showConfirmButton: false,
                    timer: 5000,
                    allowOutsideClick: false
                }).then((result) => {
                    if (result.dismiss === Swal.DismissReason.timer) {
                        $("#caciEdit").modal("hide");
                        if (data.caci === 'inscripcion') {
                            location.href = url + 'lista_inscripcion';
                        } else if (data.caci === 'reinscripcion') {
                            location.href = url + 'lista_reinscripcion';
                        }
                    }
                });
            } else {
                Swal.fire({
                    icon: 'error',
                    title: '¡Error de Sistema!',
                    text: data.result,
                    showConfirmButton: false,
                    timer: 5000,
                    allowOutsideClick: false
                }).then((result) => {
                    if (result.dismiss === Swal.DismissReason.timer) {
                        $("#caciEdit").modal("hide");
                        if (data.caci === 'inscripcion') {
                            location.href = url + 'lista_inscripcion';
                        } else if (data.caci === 'reinscripcion') {
                            location.href = url + 'lista_reinscripcion';
                        }
                    }
                });
            }
        },
        error: function(data_e) {
            console.log(data_e);
        }
    });
}
$(document).ready(function() {
    sessionTimeout({
        warnAfter: 3600000,
        logOutUrl: 'public/seguridad/logout',
        timeOutAfter: 3900000,
        timeOutUrl: 'public/seguridad/logout',
        message: '¿Estas todavia aqui?',
        logOutBtnText: 'Cerrar Sesión',
        titleText: 'La Sesión esta por expirar',
        stayConnectedBtnText: 'Mantenerse Conectado'
    });
});