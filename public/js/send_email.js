var $$ = function (id) { try { return document.getElementById(id) } catch (err) { $err(err); } };

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
                success: function (data) {
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
                error: function (data_e) {
                    console.log(data_e);
                }
            });
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
        success: function (data) {
            /* swal(
                {
                    type:'success',
                    title: data.message,                                                                  
                }                  
                )         */
            /* Swal.fire({
                icon: 'success',
                title: 'Eliminado!',
                text: 'Ha borrado el registro',
                showConfirmButton: false,
                timer: 7000,
                allowOutsideClick: false
            }) */
            alert("Email Enviado Correctamente");
        },
        error: function (data_e) {
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
        success: function (data) {
            /* swal(
                {
                    type:'success',
                    title: data.message,                                                                  
                }                  
                )         */
            alert("Email Enviado Correctamente");
        },
        error: function (data_e) {
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
        success: function (data) {
            /* swal(
                {
                    type:'success',
                    title: data.message,                                                                  
                }                  
                )         */
            alert("Email Enviado Correctamente");
        },
        error: function (data_e) {
            console.log(data_e);
            alert("Error al enviar el correo");
        }
    });



}