var $$ = function(id) { try { return document.getElementById(id) } catch (err) { $err(err); } };

function del_reg_solicitante(id_reg_solicitante, nameUser, lista, tabla, id_proceso, proceso) {
    /* alert($nameUser); */
    Swal.fire({
        title: '¿Esta seguro de eliminar el registro del solicitante? <br><br> !Una vez borrada la información ya no podra recuperarse!',
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Si, Borrar!'
    }).then((result) => {
        if (result.isConfirmed) {
            $.ajax({
                type: 'GET',
                dataType: 'json',
                data: {
                    "_token": $("meta[name='csrf-token']").attr("content"),
                    "id": id_reg_solicitante,
                    "nameUser": nameUser,
                    "tabla": tabla,
                    "lista": lista,
                    "id_proceso": id_proceso,
                    "proceso": proceso
                },
                url: url + 'destroy_reg_sol',
                success: function(data) {
                    console.log(data.ok);
                    if (data.ok) {
                        Swal.fire({
                            icon: 'success',
                            title: 'Eliminado!',
                            text: 'Ha borrado el registro',
                            showConfirmButton: false,
                            timer: 7000,
                            allowOutsideClick: false
                        }).then((result) => {
                            if (result.dismiss === Swal.DismissReason.timer) {
                                location.href = url + lista;
                            }
                        });
                    }
                },
                error: function(data_e) {
                    console.log(data_e);
                }
            });
        }
    });
}

function sust_file(id, tramite) {
    $("#id_file").val(id);
    $("#tramite").val(tramite);
    $('#fileEdit').modal('show');
    $("#upgrade_doc").attr("disabled", true);
}

function hideModal() {
    $("#fileEdit").modal("hide");
}

function actualizarDocumento(token) {
    var form_data = new FormData();
    form_data.append("_token", token);
    var fileUpgrade = $('#file_upgrade').prop("files")[0];
    form_data.append("file_upgrade", fileUpgrade);
    var id_file = $("#id_file").val();
    form_data.append("id_file", id_file);
    var tramite = $("#tramite").val();
    form_data.append("tramite", tramite);

    $.ajax({

        type: 'POST',
        dataType: 'json',
        data: form_data,
        processData: false,
        contentType: false,
        url: url + 'actualizar_documento',
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
                        $("#fileEdit").modal("hide");
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
                        $("#fileEdit").modal("hide");
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

function envia_email() {

    var id = $("#id").val();
    var nombre_tutor = $("#nombre_tutor").val();
    var ape_paterno = $("#ape_paterno").val();
    var email = $("#email").val();
    var email_caci = $("#email_caci").val();
    /* console.log(nombre_tutor); */
    $.ajax({

        type: 'POST',
        dataType: 'json',
        data: {
            "_token": $("meta[name='csrf-token']").attr("content"),
            "id": id,
            "nombre": nombre_tutor,
            "ape_paterno": ape_paterno,
            "email": email,
            "email_caci": email_caci
        },
        url: url + 'email_info_recibida_reinscri',
        success: function(data) {
            Swal.fire({
                icon: 'success',
                title: "Email Enviado Correctamente"
            });
        },
        error: function(data_e) {
            console.log(data_e);
            alert("Error al enviar el correo");
        }
    });

}

function envia_email_recib_inscri() {

    var id = $("#id").val();
    var nombre_tutor = $("#nombre_tutor").val();
    var ape_paterno = $("#ape_paterno").val();
    var email = $("#email").val();
    var email_caci = $("#email_caci").val();
    /* console.log(nombre_tutor); */
    $.ajax({

        type: 'POST',
        dataType: 'json',
        data: {
            "_token": $("meta[name='csrf-token']").attr("content"),
            "id": id,
            "nombre": nombre_tutor,
            "ape_paterno": ape_paterno,
            "email": email,
            "email_caci": email_caci
        },
        url: url + 'email_info_recibida_inscr',
        success: function(data) {
            Swal.fire({
                icon: 'success',
                title: "Email Enviado Correctamente"
            });
        },
        error: function(data_e) {
            console.log(data_e);
            alert("Error al enviar el correo");
        }
    });

}

function envia_email_info_recib_inscr() {

    var id = $("#id").val();
    var nombre_tutor = $("#nombre_tutor").val();
    var ape_paterno = $("#ape_paterno").val();
    var email = $("#email").val();
    var email_caci = $("#email_caci").val();
    /* console.log(nombre_tutor); */
    $.ajax({

        type: 'POST',
        dataType: 'json',
        data: {
            "_token": $("meta[name='csrf-token']").attr("content"),
            "id": id,
            "nombre": nombre_tutor,
            "ape_paterno": ape_paterno,
            "email": email,
            "email_caci": email_caci
        },
        url: url + 'email_info_recibida',
        success: function(data) {
            Swal.fire({
                icon: 'success',
                title: "Email Enviado Correctamente"
            });
        },
        error: function(data_e) {
            console.log(data_e);
            alert("Error al enviar el correo");
        }
    });



}