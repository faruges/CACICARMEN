var $$ = function(id) {
    try {
        return document.getElementById(id)
    } catch (err) {
        $err(err);
    }
};

var hascomponentshowed = false;


function addClase(msj1) {
    var windowWidth = window.innerWidth;
    var windowHeight = window.innerHeight;
    var mensaje = $(msj1).css('display');

    if (mensaje == 'none' && hascomponentshowed == false) {
        hascomponentshowed = true;
        $(msj1).css('display', 'block');
    }
    if (windowWidth < 500) {
        $(msj1).css('display', 'none');
    }

}

function addClaseMobil(msj1) {
    var mensaje = $(msj1).css('display');
    var windowWidth = window.innerWidth;
    var windowHeight = window.innerHeight;
    if (windowWidth < 500) {
        console.log('hola?');
        if (mensaje == 'none' && hascomponentshowed) {
            hascomponentshowed = true;
            $(msj1).css('display', 'block');
        }
    }


}

function deleteClase(msj) {
    var windowWidth = window.innerWidth;
    var windowHeight = window.innerHeight;
    console.log(windowWidth);
    hascomponentshowed = false;
    $(msj).css('display', 'none');
}

function deleteClaseMobil(msj) {
    hascomponentshowed = false;
    var windowWidth = window.innerWidth;
    var windowHeight = window.innerHeight;

    if (windowWidth < 500) {
        $(msj).css('display', 'none');
    }

}

function mayus(objeto_input) {
    objeto_input.value = objeto_input.value.toUpperCase();
}

function allFilesAreCorrect() {

}
$(function() {
    $("#fecha_cambio_caci").on('change', function() {
        $("#tab_2_4")[0].click();
    });
    $("#fecha_cambio_caci").blur(function() {
        $("#tab_2_4")[0].click();
    });
    $("#grupo_sanguineo").on('change', function() {
        $("#tab_3_4")[0].click();
    });
    $("#grupo_sanguineo").blur(function() {
        $("#tab_3_4")[0].click();
    });
    $("#ciclo_escolar").val();
    $("#anio_registro_nac_nino").blur(function() {
        var valor = $("#anio_registro_nac_nino").val();
        const valTelefono = '[0-9]{4}';
        var validado = valor.match(valTelefono);
        if (!validado) {
            $("#anio_registro_nac_nino").val('');
            $("#anio_registro_nac_nino").css('background', '#ffe6e6');
        } else {
            $("#anio_registro_nac_nino").css('background', '#ffffff');
        }
    });
    $("#edad_padre").blur(function() {
        var valor = $("#edad_padre").val();
        const valTelefono = '[0-9]{2}';
        var validado = valor.match(valTelefono);
        if (!validado) {
            $("#edad_padre").val('');
            $("#edad_padre").css('background', '#ffe6e6');
        } else {
            $("#edad_padre").css('background', '#ffffff');
        }
    });
    $("#curp_person_autorizada").blur(function() {
        var curpValido = $("#curp_person_autorizada").val();
        const valCurp = '[A-Z][A,E,I,O,U,X][A-Z]{2}[0-9]{2}[0-1][0-9][0-3][0-9][M,H][A-Z]{2}[B,C,D,F,G,H,J,K,L,M,N,Ñ,P,Q,R,S,T,V,W,X,Y,Z]{3}[0-9,A-Z][0-9]';
        var validado = curpValido.match(valCurp);
        if (!validado) {
            $("#curp_person_autorizada").val('');
            Swal.fire({
                icon: 'warning',
                title: 'Curp no válido',
                showConfirmButton: true,
                allowOutsideClick: false
            });
        } else {
            //alert("Curp valido");
        }
    });
    $("#email_person_autorizada").blur(function() {
        var curpValido = $("#email_person_autorizada").val();
        const valCurp = "^[a-zA-Z0-9_.+-]+@[a-zA-Z0-9-]+\.[a-zA-Z0-9-.]+$";
        var validado = curpValido.match(valCurp);
        if (!validado) {
            $("#email_person_autorizada").val('');
            Swal.fire({
                icon: 'warning',
                title: 'Email no válido',
                showConfirmButton: true,
                allowOutsideClick: false
            });
        }
    });
    $("#email_person_autorizada_dos").blur(function() {
        var curpValido = $("#email_person_autorizada_dos").val();
        const valCurp = "^[a-zA-Z0-9_.+-]+@[a-zA-Z0-9-]+\.[a-zA-Z0-9-.]+$";
        var validado = curpValido.match(valCurp);
        if (!validado) {
            $("#email_person_autorizada_dos").val('');
            Swal.fire({
                icon: 'warning',
                title: 'Email no válido',
                showConfirmButton: true,
                allowOutsideClick: false
            });
        }
    });
    $("#curp_person_autorizada_dos").blur(function() {
        var curpValido = $("#curp_person_autorizada_dos").val();
        const valCurp = '[A-Z][A,E,I,O,U,X][A-Z]{2}[0-9]{2}[0-1][0-9][0-3][0-9][M,H][A-Z]{2}[B,C,D,F,G,H,J,K,L,M,N,Ñ,P,Q,R,S,T,V,W,X,Y,Z]{3}[0-9,A-Z][0-9]';
        var validado = curpValido.match(valCurp);
        if (!validado) {
            $("#curp_person_autorizada_dos").val('');
            /* alert("Curp no válido"); */
            Swal.fire({
                icon: 'warning',
                title: 'Curp no válido',
                showConfirmButton: true,
                allowOutsideClick: false
            });
        } else {
            //alert("Curp valido");
        }
    });
    $("#edad_person_autorizada").blur(function() {
        var valor = $("#edad_person_autorizada").val();
        const valTelefono = '[0-9]{2}';
        var validado = valor.match(valTelefono);
        if (!validado) {
            $("#edad_person_autorizada").val('');
            $("#edad_person_autorizada").css('background', '#ffe6e6');
        } else {
            $("#edad_person_autorizada").css('background', '#ffffff');
        }
    });
    $("#edad_person_autorizada_dos").blur(function() {
        var valor = $("#edad_person_autorizada_dos").val();
        const valTelefono = '[0-9]{2}';
        var validado = valor.match(valTelefono);
        if (!validado) {
            $("#edad_person_autorizada_dos").val('');
            $("#edad_person_autorizada_dos").css('background', '#ffe6e6');
        } else {
            $("#edad_person_autorizada_dos").css('background', '#ffffff');
        }
    });
    $("#telefono_laboral_segundo_empleo").blur(function() {
        var valor = $("#telefono_laboral_segundo_empleo").val();
        const valTelefono = '[0-9]{10}';
        var validado = valor.match(valTelefono);
        if (!validado) {
            $("#telefono_laboral_segundo_empleo").val('');
            $("#telefono_laboral_segundo_empleo").css('background', '#ffe6e6');
        } else {
            $("#telefono_laboral_segundo_empleo").css('background', '#ffffff');
        }
    });
    $("#telefono_laboral_padre").blur(function() {
        var valor = $("#telefono_laboral_padre").val();
        const valTelefono = '[0-9]{10}';
        var validado = valor.match(valTelefono);
        if (!validado) {
            $("#telefono_laboral_padre").val('');
            $("#telefono_laboral_padre").css('background', '#ffe6e6');
        } else {
            $("#telefono_laboral_padre").css('background', '#ffffff');
        }
    });
    $("#tel_recados_padre").blur(function() {
        var valor = $("#tel_recados_padre").val();
        const valTelefono = '[0-9]{10}';
        var validado = valor.match(valTelefono);
        if (!validado) {
            $("#tel_recados_padre").val('');
            $("#tel_recados_padre").css('background', '#ffe6e6');
        } else {
            $("#tel_recados_padre").css('background', '#ffffff');
        }
    });
    $("#tel_celular_padre").blur(function() {
        var valor = $("#tel_celular_padre").val();
        const valTelefono = '[0-9]{10}';
        var validado = valor.match(valTelefono);
        if (!validado) {
            $("#tel_celular_padre").val('');
            $("#tel_celular_padre").css('background', '#ffe6e6');
        } else {
            $("#tel_celular_padre").css('background', '#ffffff');
        }
    });
    $("#telefono_recado_nino").blur(function() {
        var valor = $("#telefono_recado_nino").val();
        const valTelefono = '[0-9]{10}';
        var validado = valor.match(valTelefono);
        if (!validado) {
            $("#telefono_recado_nino").val('');
            $("#telefono_recado_nino").css('background', '#ffe6e6');
        } else {
            $("#telefono_recado_nino").css('background', '#ffffff');
        }
    });
    $("#tel_particular_padre").blur(function() {
        var valor = $("#tel_particular_padre").val();
        const valTelefono = '[0-9]{10}';
        var validado = valor.match(valTelefono);
        if (!validado) {
            $("#tel_particular_padre").val('');
            $("#tel_particular_padre").css('background', '#ffe6e6');
        } else {
            $("#tel_particular_padre").css('background', '#ffffff');
        }
    });
    $("#tel_particular_person_autorizada").blur(function() {
        var valor = $("#tel_particular_person_autorizada").val();
        const valTelefono = '[0-9]{10}';
        var validado = valor.match(valTelefono);
        if (!validado) {
            $("#tel_particular_person_autorizada").val('');
            $("#tel_particular_person_autorizada").css('background', '#ffe6e6');
        } else {
            $("#tel_particular_person_autorizada").css('background', '#ffffff');
        }
    });
    $("#tel_particular_person_autorizada_dos").blur(function() {
        var valor = $("#tel_particular_person_autorizada_dos").val();
        const valTelefono = '[0-9]{10}';
        var validado = valor.match(valTelefono);
        if (!validado) {
            $("#tel_particular_person_autorizada_dos").val('');
            $("#tel_particular_person_autorizada_dos").css('background', '#ffe6e6');
        } else {
            $("#tel_particular_person_autorizada_dos").css('background', '#ffffff');
        }
    });
    $("#tel_laboral_person_autorizada").blur(function() {
        var valor = $("#tel_laboral_person_autorizada").val();
        const valTelefono = '[0-9]{10}';
        var validado = valor.match(valTelefono);
        if (!validado) {
            $("#tel_laboral_person_autorizada").val('');
            $("#tel_laboral_person_autorizada").css('background', '#ffe6e6');
        } else {
            $("#tel_laboral_person_autorizada").css('background', '#ffffff');
        }
    });
    $("#tel_laboral_person_autorizada_dos").blur(function() {
        var valor = $("#tel_laboral_person_autorizada_dos").val();
        const valTelefono = '[0-9]{10}';
        var validado = valor.match(valTelefono);
        if (!validado) {
            $("#tel_laboral_person_autorizada_dos").val('');
            $("#tel_laboral_person_autorizada_dos").css('background', '#ffe6e6');
        } else {
            $("#tel_laboral_person_autorizada_dos").css('background', '#ffffff');
        }
    });
    $("#tel_celular_person_autorizada").blur(function() {
        var valor = $("#tel_celular_person_autorizada").val();
        const valTelefono = '[0-9]{10}';
        var validado = valor.match(valTelefono);
        if (!validado) {
            $("#tel_celular_person_autorizada").val('');
            $("#tel_celular_person_autorizada").css('background', '#ffe6e6');
        } else {
            $("#tel_celular_person_autorizada").css('background', '#ffffff');
        }
    });
    $("#tel_celular_person_autorizada_dos").blur(function() {
        var valor = $("#tel_celular_person_autorizada_dos").val();
        const valTelefono = '[0-9]{10}';
        var validado = valor.match(valTelefono);
        if (!validado) {
            $("#tel_celular_person_autorizada_dos").val('');
            $("#tel_celular_person_autorizada_dos").css('background', '#ffe6e6');
        } else {
            $("#tel_celular_person_autorizada_dos").css('background', '#ffffff');
        }
    });
    $("#codigo_postal_nino").blur(function() {
        var valor = $("#codigo_postal_nino").val();
        const valTelefono = '[0-9]{5}';
        var validado = valor.match(valTelefono);
        if (!validado) {
            $("#codigo_postal_nino").val('');
            $('#codigo_postal_nino').css('background', '#ffe6e6');
        } else {
            $('#codigo_postal_nino').css('background', '#ffffff');
        }
    });
    $("#codigo_postal_padre").blur(function() {
        var valor = $("#codigo_postal_padre").val();
        const valTelefono = '[0-9]{5}';
        var validado = valor.match(valTelefono);
        if (!validado) {
            $("#codigo_postal_padre").val('');
            $('#codigo_postal_padre').css('background', '#ffe6e6');
        } else {
            $('#codigo_postal_padre').css('background', '#ffffff');
        }
    });
    $("#codigo_postal_laboral_padre").blur(function() {
        var valor = $("#codigo_postal_laboral_padre").val();
        const valTelefono = '[0-9]{5}';
        var validado = valor.match(valTelefono);
        if (!validado) {
            $("#codigo_postal_laboral_padre").val('');
            $('#codigo_postal_laboral_padre').css('background', '#ffe6e6');
        } else {
            $('#codigo_postal_laboral_padre').css('background', '#ffffff');
        }
    });
    $("#codigo_postal_laboral_segundo_empleo").blur(function() {
        var valor = $("#codigo_postal_laboral_segundo_empleo").val();
        const valTelefono = '[0-9]{5}';
        var validado = valor.match(valTelefono);
        if (!validado) {
            $("#codigo_postal_laboral_segundo_empleo").val('');
            $('#codigo_postal_laboral_segundo_empleo').css('background', '#ffe6e6');
        } else {
            $('#codigo_postal_laboral_segundo_empleo').css('background', '#ffffff');
        }
    });
    $("#codigo_postal_person_autorizada").blur(function() {
        var valor = $("#codigo_postal_person_autorizada").val();
        const valTelefono = '[0-9]{5}';
        var validado = valor.match(valTelefono);
        if (!validado) {
            $("#codigo_postal_person_autorizada").val('');
            $('#codigo_postal_person_autorizada').css('background', '#ffe6e6');
        } else {
            $('#codigo_postal_person_autorizada').css('background', '#ffffff');
        }
    });
    $("#codigo_postal_laboral_person_autorizada").blur(function() {
        var valor = $("#codigo_postal_laboral_person_autorizada").val();
        const valTelefono = '[0-9]{5}';
        var validado = valor.match(valTelefono);
        if (!validado) {
            $("#codigo_postal_laboral_person_autorizada").val('');
            $('#codigo_postal_laboral_person_autorizada').css('background', '#ffe6e6');
        } else {
            $('#codigo_postal_laboral_person_autorizada').css('background', '#ffffff');
        }
    });
    $("#codigo_postal_laboral_person_autorizada_dos").blur(function() {
        var valor = $("#codigo_postal_laboral_person_autorizada_dos").val();
        const valTelefono = '[0-9]{5}';
        var validado = valor.match(valTelefono);
        if (!validado) {
            $("#codigo_postal_laboral_person_autorizada_dos").val('');
            $('#codigo_postal_laboral_person_autorizada_dos').css('background', '#ffe6e6');
        } else {
            $('#codigo_postal_laboral_person_autorizada_dos').css('background', '#ffffff');
        }
    });
    $("#codigo_postal_person_autorizada_dos").blur(function() {
        var valor = $("#codigo_postal_person_autorizada_dos").val();
        const valTelefono = '[0-9]{5}';
        var validado = valor.match(valTelefono);
        if (!validado) {
            $("#codigo_postal_person_autorizada_dos").val('');
            $('#codigo_postal_person_autorizada_dos').css('background', '#ffe6e6');
        } else {
            $('#codigo_postal_person_autorizada_dos').css('background', '#ffffff');
        }
    });
    var act_supera_tamanio_permitido = false;
    //se deshabilita el boton enviar
    $("#enviar").attr("disabled", true);
    $("#curp").blur(function() {
        var curpValido = $("#curp").val();
        const valCurp = '[A-Z][A,E,I,O,U,X][A-Z]{2}[0-9]{2}[0-1][0-9][0-3][0-9][M,H][A-Z]{2}[B,C,D,F,G,H,J,K,L,M,N,Ñ,P,Q,R,S,T,V,W,X,Y,Z]{3}[0-9,A-Z][0-9]';
        var validado = curpValido.match(valCurp);
        if (!validado) {
            $("#curp").val('');
            /* alert("Curp no válido"); */
            Swal.fire({
                icon: 'warning',
                title: 'Curp no válido',
                showConfirmButton: true,
                allowOutsideClick: false
            });
        } else {
            //alert("Curp valido");
        }
    });
    $("#codigo_postal").blur(function() {
        var codigoPostal = $("#codigo_postal").val();
        var tokenId = $("#tokenCodigoPostalId").val();

        $.ajax({

            type: 'POST',
            dataType: 'json',
            data: {
                "_token": $("meta[name='csrf-token']").attr("content"),
                "CP": codigoPostal,
                "tokenId": tokenId
            },
            url: url + 'webservicecp',
            success: function(data) {
                if (data.resultado.length <= 0) {
                    $('#alcaldia').val('');
                    $('#codigo_postal').css('background', '#ffe6e6');
                    //console.log("no trae ni maiz");
                } else {
                    //console.log("vamo a ver que pedo");
                    $('#codigo_postal').css('background', '#ffffff');
                    $('#colonia').empty();
                    data.resultado.forEach(element => {
                        //console.log(element['d_asenta']);
                        //console.log(element['D_mnpio']);
                        $('#colonia').append($('<option></option>').val(element['d_asenta']).html(element['d_asenta']));
                        //colonia = element['d_asenta'];
                        alcaldia = element['D_mnpio'];
                    });
                    //$('#colonia').val(colonia);
                    $('#alcaldia').val(alcaldia);
                    /* alert("Los Datos se Consultaron Correctamente"); */
                }

            },
            error: function(data_e) {
                console.log(data_e);
                alert("El Codigo Postal no se encuentra en nuestros Registros");
            }
        });
    });
    $("#telefono_uno").blur(function() {
        var telefono_uno = $("#telefono_uno").val();
        const valTelefono = '[0-9]{10}';
        var validado = telefono_uno.match(valTelefono);
        if (!validado) {
            $("#telefono_uno").val('');
            $('#telefono_uno').css('background', '#ffe6e6');
            //alert("Telefono no válido");
        } else {
            $('#telefono_uno').css('background', '#ffffff');
            //alert("Telefono valido");
        }
    });
    $("#telefono_dos").blur(function() {
        var telefono_dos = $("#telefono_dos").val();
        const valTelefono = '[0-9]{10}';
        var validado = telefono_dos.match(valTelefono);
        if (!validado) {
            $("#telefono_dos").val('');
            $('#telefono_dos').css('background', '#ffe6e6');
            //alert("Telefono no válido");
        } else {
            $('#telefono_dos').css('background', '#ffffff');
            //alert("Telefono válido");
        }
    });
    $("#numero_domicilio").blur(function() {
        var numero = $("#numero_domicilio").val();
        const valNumero = '[0-9]';
        var validado = numero.match(valNumero);
        if (!validado) {
            $("#numero_domicilio").val('');
            $('#numero_domicilio').css('background', '#ffe6e6');
            //alert("Número no válido");
        } else {
            $('#numero_domicilio').css('background', '#ffffff');
        }
    });
    $("#terminos").on('change', function() {
        if ($('#terminos').is(':checked')) {
            $("#enviar").attr("disabled", false);
            //console.log($('#terminos').value);

        } else {
            $("#enviar").attr("disabled", true);
            //console.log($('#terminos').value);
        }
    });
    $("#no_discapacidad").on('change', function() {
        $("#content_discapacidad").css('display', 'none');
    });
    $("#si_discapacidad").on('change', function() {
        $("#content_discapacidad").css('display', 'block');
    });
    $("#no_padecimiento").on('change', function() {
        $("#content_padecimiento").css('display', 'none');
    });
    $("#si_padecimiento").on('change', function() {
        $("#content_padecimiento").css('display', 'block');
    });
    $("#no_alergia").on('change', function() {
        $("#content_alergia").css('display', 'none');
    });
    $("#si_alergia").on('change', function() {
        $("#content_alergia").css('display', 'block');
    });

    $("#gridRadios1").on('change', function() {
        $("#content_segundo_empleo").css('display', 'none');
        $("#tab_4_4")[0].click();
    });
    if ($('#gridRadios2').is(':checked')) {
        console.log($('#dias_laborales_padre').val());
    }
    $("#gridRadios2").on('change', function() {
        $("#content_segundo_empleo").css('display', 'block');
    });
    $("#codigo_postal_laboral_segundo_empleo").on('change', function() {
        $("#tab_4_4")[0].click();
    });
    $("#codigo_postal_laboral_segundo_empleo").blur(function() {
        $("#tab_4_4")[0].click();
    });
    arrayNamesFiles = [];
    $("#filename_act").on('change', function() {
        act_supera_tamanio_permitido = true;
        console.log(act_supera_tamanio_permitido);
        const tamanioArchivoPermitido = 2000000;
        var dato_archivo_act = $('#filename_act').prop("files")[0];
        /* console.log(dato_archivo_act.prop("files")[0].name); */
        addToArrayNameFiles(dato_archivo_act.name);
        if (dato_archivo_act.size > tamanioArchivoPermitido) {
            //console.log(dato_archivo_act.size);
            //$("#nextBtn").attr("disabled", true);
            Swal.fire({
                title: 'El tamaño del archivo no debe de exceder los 2 Mb',
                text: 'Por favor seleccione un archivo que no exceda el tamaño permitido. En caso de tener dudas comunicarse al teléfono 55 5588 4155 Ext. 5831',
                icon: 'warning',
                showCancelButton: false,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Ok',
                allowOutsideClick: false
            });
        } else {
            console.log(arrayNamesFiles);
            $("#js-progressbar-act").attr("hidden", false);
            addProgressBar($("#js-progressbar-act"));
            //alert("si hiciste caso se habilita boton");
            act_supera_tamanio_permitido = false;
            console.log(act_supera_tamanio_permitido);
            $("#nextBtn").attr("disabled", false);
        }
    });
    $("#filename_nac").on('change', function() {
        nac_supera_tamanio_permitido = true;
        const tamanioArchivoPermitido = 2000000;
        var dato_archivo_act = $('#filename_nac').prop("files")[0];
        addToArrayNameFiles(dato_archivo_act.name);
        if (dato_archivo_act.size > tamanioArchivoPermitido) {
            //console.log(dato_archivo_act.size);
            //$("#nextBtn").attr("disabled", true);
            Swal.fire({
                title: 'El tamaño del archivo no debe de exceder los 2 Mb',
                text: 'Por favor seleccione un archivo que no exceda el tamaño permitido. En caso de tener dudas comunicarse al teléfono 55 5588 4155 Ext. 5831',
                icon: 'warning',
                showCancelButton: false,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Ok',
                allowOutsideClick: false
            });
        } else {
            console.log(arrayNamesFiles);
            $("#js-progressbar-nac").attr("hidden", false);
            addProgressBar($("#js-progressbar-nac"));
            //alert("si hiciste caso se habilita boton");
            nac_supera_tamanio_permitido = false;
            $("#nextBtn").attr("disabled", false);
        }
    });
    $("#filename_vacu").on('change', function() {
        vac_supera_tamanio_permitido = true;
        const tamanioArchivoPermitido = 2000000;
        var dato_archivo_act = $('#filename_vacu').prop("files")[0];
        addToArrayNameFiles(dato_archivo_act.name);
        if (dato_archivo_act.size > tamanioArchivoPermitido) {
            //console.log(dato_archivo_act.size);
            //$("#nextBtn").attr("disabled", true);
            Swal.fire({
                title: 'El tamaño del archivo no debe de exceder los 2 Mb',
                text: 'Por favor seleccione un archivo que no exceda el tamaño permitido. En caso de tener dudas comunicarse al teléfono 55 5588 4155 Ext. 5831',
                icon: 'warning',
                showCancelButton: false,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Ok',
                allowOutsideClick: false
            });
        } else {
            addToArrayNameFiles(dato_archivo_act.name);
            $("#js-progressbar-vacu").attr("hidden", false);
            addProgressBar($("#js-progressbar-vacu"));
            vac_supera_tamanio_permitido = false;
            $("#nextBtn").attr("disabled", false);
        }
    });
    $("#filename_com").on('change', function() {
        curp_supera_tamanio_permitido = true;
        const tamanioArchivoPermitido = 2000000;
        var dato_archivo_act = $('#filename_com').prop("files")[0];
        addToArrayNameFiles(dato_archivo_act.name);
        if (dato_archivo_act.size > tamanioArchivoPermitido) {
            //console.log(dato_archivo_act.size);
            //$("#nextBtn").attr("disabled", true);
            Swal.fire({
                title: 'El tamaño del archivo no debe de exceder los 2 Mb',
                text: 'Por favor seleccione un archivo que no exceda el tamaño permitido. En caso de tener dudas comunicarse al teléfono 55 5588 4155 Ext. 5831',
                icon: 'warning',
                showCancelButton: false,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Ok',
                allowOutsideClick: false
            });
        } else {
            $("#js-progressbar-com").attr("hidden", false);
            addProgressBar($("#js-progressbar-com"));
            curp_supera_tamanio_permitido = false;
            $("#nextBtn").attr("disabled", false);
        }
    });
    $("#filename_disc").on('change', function() {
        disc_supera_tamanio_permitido = true;
        const tamanioArchivoPermitido = 2000000;
        var dato_archivo_act = $('#filename_disc').prop("files")[0];
        addToArrayNameFiles(dato_archivo_act.name);
        if (dato_archivo_act.size > tamanioArchivoPermitido) {
            //console.log(dato_archivo_act.size);
            //$("#nextBtn").attr("disabled", true);
            Swal.fire({
                title: 'El tamaño del archivo no debe de exceder los 2 Mb',
                text: 'Por favor seleccione un archivo que no exceda el tamaño permitido. En caso de tener dudas comunicarse al teléfono 55 5588 4155 Ext. 5831',
                icon: 'warning',
                showCancelButton: false,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Ok',
                allowOutsideClick: false
            });
        } else {
            $("#js-progressbar-disc").attr("hidden", false);
            addProgressBar($("#js-progressbar-disc"));
            disc_supera_tamanio_permitido = false;
            $("#nextBtn").attr("disabled", false);
        }
    });
    $("#file_upgrade").on('change', function() {
        disc_supera_tamanio_permitido = true;
        const tamanioArchivoPermitido = 2000000;
        var dato_archivo_act = $('#file_upgrade').prop("files")[0];
        addToArrayNameFiles(dato_archivo_act.name);
        if (dato_archivo_act.size > tamanioArchivoPermitido) {
            //console.log(dato_archivo_act.size);
            //$("#nextBtn").attr("disabled", true);
            $("#upgrade_doc").attr("disabled", true);
            Swal.fire({
                title: 'El tamaño del archivo no debe de exceder los 2 Mb',
                text: 'Por favor seleccione un archivo que no exceda el tamaño permitido. En caso de tener dudas comunicarse al teléfono 55 5588 4155 Ext. 5831',
                icon: 'warning',
                showCancelButton: false,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Ok',
                allowOutsideClick: false
            });
        } else {
            $("#js-progressbar-disc").attr("hidden", false);
            addProgressBar($("#js-progressbar-disc"));
            disc_supera_tamanio_permitido = false;
            $("#upgrade_doc").attr("disabled", false);
        }
    });
    $("#filename_trab").on('change', function() {
        trab_supera_tamanio_permitido = true;
        const tamanioArchivoPermitido = 2000000;
        var dato_archivo_act = $('#filename_trab').prop("files")[0];
        addToArrayNameFiles(dato_archivo_act.name);
        if (dato_archivo_act.size > tamanioArchivoPermitido) {
            //console.log(dato_archivo_act.size);
            //$("#nextBtn").attr("disabled", true);
            Swal.fire({
                title: 'El tamaño del archivo no debe de exceder los 2 Mb',
                text: 'Por favor seleccione un archivo que no exceda el tamaño permitido. En caso de tener dudas comunicarse al teléfono 55 5588 4155 Ext. 5831',
                icon: 'warning',
                showCancelButton: false,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Ok',
                allowOutsideClick: false
            });
        } else {
            $("#js-progressbar-trab").attr("hidden", false);
            addProgressBar($("#js-progressbar-trab"));
            trab_supera_tamanio_permitido = false;
            $("#nextBtn").attr("disabled", false);
        }
    });
    $("#filename_credencial").on('change', function() {
        trab_supera_tamanio_permitido = true;
        const tamanioArchivoPermitido = 2000000;
        var dato_archivo_act = $('#filename_credencial').prop("files")[0];
        addToArrayNameFiles(dato_archivo_act.name);
        if (dato_archivo_act.size > tamanioArchivoPermitido) {
            //console.log(dato_archivo_act.size);
            //$("#nextBtn").attr("disabled", true);
            Swal.fire({
                title: 'El tamaño del archivo no debe de exceder los 2 Mb',
                text: 'Por favor seleccione un archivo que no exceda el tamaño permitido. En caso de tener dudas comunicarse al teléfono 55 5588 4155 Ext. 5831',
                icon: 'warning',
                showCancelButton: false,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Ok',
                allowOutsideClick: false
            });
        } else {
            $("#js-progressbar-credencial").attr("hidden", false);
            addProgressBar($("#js-progressbar-credencial"));
            trab_supera_tamanio_permitido = false;
            $("#nextBtn").attr("disabled", false);
        }
    });
    $("#filename_gafete").on('change', function() {
        trab_supera_tamanio_permitido = true;
        const tamanioArchivoPermitido = 2000000;
        var dato_archivo_act = $('#filename_gafete').prop("files")[0];
        addToArrayNameFiles(dato_archivo_act.name);
        if (dato_archivo_act.size > tamanioArchivoPermitido) {
            //console.log(dato_archivo_act.size);
            //$("#nextBtn").attr("disabled", true);
            Swal.fire({
                title: 'El tamaño del archivo no debe de exceder los 2 Mb',
                text: 'Por favor seleccione un archivo que no exceda el tamaño permitido. En caso de tener dudas comunicarse al teléfono 55 5588 4155 Ext. 5831',
                icon: 'warning',
                showCancelButton: false,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Ok',
                allowOutsideClick: false
            });
        } else {
            $("#js-progressbar-gafete").attr("hidden", false);
            addProgressBar($("#js-progressbar-gafete"));
            trab_supera_tamanio_permitido = false;
            $("#nextBtn").attr("disabled", false);
        }
    });
    $("#filename_solicitud").on('change', function() {
        trab_supera_tamanio_permitido = true;
        const tamanioArchivoPermitido = 2000000;
        var dato_archivo_act = $('#filename_solicitud').prop("files")[0];
        addToArrayNameFiles(dato_archivo_act.name);
        if (dato_archivo_act.size > tamanioArchivoPermitido) {
            //console.log(dato_archivo_act.size);
            //$("#nextBtn").attr("disabled", true);
            Swal.fire({
                title: 'El tamaño del archivo no debe de exceder los 2 Mb',
                text: 'Por favor seleccione un archivo que no exceda el tamaño permitido. En caso de tener dudas comunicarse al teléfono 55 5588 4155 Ext. 5831',
                icon: 'warning',
                showCancelButton: false,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Ok',
                allowOutsideClick: false
            });
        } else {
            $("#js-progressbar-solicitud").attr("hidden", false);
            addProgressBar($("#js-progressbar-solicitud"));
            trab_supera_tamanio_permitido = false;
            $("#nextBtn").attr("disabled", false);
        }
    });
    $("#filename_carta").on('change', function() {
        trab_supera_tamanio_permitido = true;
        const tamanioArchivoPermitido = 2000000;
        var dato_archivo_act = $('#filename_carta').prop("files")[0];
        addToArrayNameFiles(dato_archivo_act.name);
        if (dato_archivo_act.size > tamanioArchivoPermitido) {
            //console.log(dato_archivo_act.size);
            //$("#nextBtn").attr("disabled", true);
            Swal.fire({
                title: 'El tamaño del archivo no debe de exceder los 2 Mb',
                text: 'Por favor seleccione un archivo que no exceda el tamaño permitido. En caso de tener dudas comunicarse al teléfono 55 5588 4155 Ext. 5831',
                icon: 'warning',
                showCancelButton: false,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Ok',
                allowOutsideClick: false
            });
        } else {
            $("#js-progressbar-carta").attr("hidden", false);
            addProgressBar($("#js-progressbar-carta"));
            trab_supera_tamanio_permitido = false;
            $("#nextBtn").attr("disabled", false);
        }
    });
    $("#filename_sol_anali").on('change', function() {
        trab_supera_tamanio_permitido = true;
        const tamanioArchivoPermitido = 2000000;
        var dato_archivo_act = $('#filename_sol_anali').prop("files")[0];
        addToArrayNameFiles(dato_archivo_act.name);
        if (dato_archivo_act.size > tamanioArchivoPermitido) {
            //console.log(dato_archivo_act.size);
            //$("#nextBtn").attr("disabled", true);
            Swal.fire({
                title: 'El tamaño del archivo no debe de exceder los 2 Mb',
                text: 'Por favor seleccione un archivo que no exceda el tamaño permitido. En caso de tener dudas comunicarse al teléfono 55 5588 4155 Ext. 5831',
                icon: 'warning',
                showCancelButton: false,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Ok',
                allowOutsideClick: false
            });
        } else {
            $("#js-progressbar-sol-anali").attr("hidden", false);
            addProgressBar($("#js-progressbar-sol-anali"));
            trab_supera_tamanio_permitido = false;
            $("#nextBtn").attr("disabled", false);
        }
    });
    $("#filename_compr_pago").on('change', function() {
        trab_supera_tamanio_permitido = true;
        const tamanioArchivoPermitido = 2000000;
        var dato_archivo_act = $('#filename_compr_pago').prop("files")[0];
        addToArrayNameFiles(dato_archivo_act.name);
        if (dato_archivo_act.size > tamanioArchivoPermitido) {
            //console.log(dato_archivo_act.size);
            //$("#nextBtn").attr("disabled", true);
            Swal.fire({
                title: 'El tamaño del archivo no debe de exceder los 2 Mb',
                text: 'Por favor seleccione un archivo que no exceda el tamaño permitido. En caso de tener dudas comunicarse al teléfono 55 5588 4155 Ext. 5831',
                icon: 'warning',
                showCancelButton: false,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Ok',
                allowOutsideClick: false
            });
        } else {
            $("#js-progressbar-compr-pago").attr("hidden", false);
            addProgressBar($("#js-progressbar-compr-pago"));
            trab_supera_tamanio_permitido = false;
            $("#nextBtn").attr("disabled", false);
        }
    });

    function addToArrayNameFiles(nameFile) {
        arrayNamesFiles.push({
            "name": nameFile
        });
    }

    function addProgressBar(bar) {
        setTimeout(function() {
            for (let index = 0; index <= 100; index++) {
                bar.attr('value', index);
            }
        }, 50);
    }
});