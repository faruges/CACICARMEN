$(document).ready(function () {
    $("#rol").blur(function () {
        var rol = $("#rol").val();
        switch (rol) {
            case 'super_caci':
                $('#email').val('caciadministracion@finanzas.cdmx.gob.mx');
                break;
            case 'caciluz':
                $('#email').val('caciluzmariagomez@finanzas.cdmx.gob.mx');
                break;
            case 'cacieva':
                $('#email').val('cacievamoreno@finanzas.cdmx.gob.mx');
                break;
            case 'cacibertha':
                $('#email').val('caciberthavonglumer@finanzas.cdmx.gob.mx');
                break;
            case 'cacicarolina':
                $('#email').val('cacicarolinaagazzi@finanzas.cdmx.gob.mx');
                break;
            case 'cacicarmen':
                $('#email').val('cacicarmenserdan@finanzas.cdmx.gob.mx');
                break;
        }
        //alert(rol);
    });

    $("#password_repeat").keyup(function () {
        var pass = $("#password").val();
        var pass_repeat = $(this).val();
        showMsjValidacionPass(pass, pass_repeat);
    })
    $("#password").keyup(function () {
        var pass_repeat = $("#password_repeat").val();
        var pass = $(this).val();
        showMsjValidacionPass(pass_repeat, pass);
    })
});

function showMsjValidacionPass(pass, pass_repeat) {

    if (pass == pass_repeat) {
        //esto en caso de que los dos pass esten vacios, manda msj que deben de ingresar pass
        if (pass === '' && pass_repeat === '') {
            $(".label-red").remove();
            $("#label-warning-pass").append("<label class='label-red'>Las Contraseñas No son Validas</label>");
            $("#save_user").attr("disabled", true);
        } else {
            //remueve el msj de advertencia para crear el msj de exitoso.            
            $(".label-red").remove();
            $(".label-green").remove();
            $("#label-success-pass").append("<label class='label-green'>Las Contraseñas Coinciden</label>");
            $("#save_user").attr("disabled", false);
        }
    } else {
        var label_red = $(".label-red");
        //encuentra el elemento etiqueta roja y si existe obtiene la longitud de 1 en este caso no se podra crear el msj de advertencia
        var element_dom = $("#label-warning-pass").find(label_red).length;
        $(".label-green").remove();
        if (element_dom === 0) {
            $("#label-warning-pass").append("<label class='label-red'>Las Contraseñas No Coinciden</label>");
            $("#save_user").attr("disabled", true);
        }
    }
}

function mostrarPass(identificador_pass) {
    if (identificador_pass == 'pass') {
        var changeTypeElement = $("#password")[0].type;
        if (changeTypeElement == 'password') {
            $("#password")[0].type = "text";
            $(".icon").removeClass('fa fa-eye-slash').addClass('fa fa-eye');
        } else {
            $("#password")[0].type = "password";
            $(".icon").removeClass('fa fa-eye').addClass('fa fa-eye-slash');
        }
    } else {
        var changeTypeElement = $("#password_repeat")[0].type;
        if (changeTypeElement == 'password') {
            $("#password_repeat")[0].type = "text";
            $(".icon-repeat").removeClass('fa fa-eye-slash').addClass('fa fa-eye');
        } else {
            $("#password_repeat")[0].type = "password";
            $(".icon-repeat").removeClass('fa fa-eye').addClass('fa fa-eye-slash');
        }
    }
    /* console.log(changeTypeElement.type); */
}

function destroy(id) {
    Swal.fire({
        title: '¿Esta seguro de eliminar al Usuario? <br>',
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Si, Eliminar!'
    }).then((result) => {
        if (result.isConfirmed) {
            var token = $("meta[name='csrf-token']").attr("content");
            $.ajax({
                type: 'POST',
                dataType: 'json',
                data: {
                    "_token": token,
                    "id": id
                },
                url: url + 'destroy',
                success: function (data) {
                    /* console.log(data.ok); */
                    if (data.ok) {
                        Swal.fire({
                            icon: 'success',
                            title: '¡Eliminado!',
                            text: 'Ha borrado al Usuario',
                            showConfirmButton: false,
                            timer: 3000,
                            allowOutsideClick: false
                        }).then((result) => {
                            if (result.dismiss === Swal.DismissReason.timer) {
                                location.href = url + 'users';
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
