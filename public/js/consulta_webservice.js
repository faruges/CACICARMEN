var $$ = function (id) {
    try {
        return document.getElementById(id)
    } catch (err) {
        $err(err);
    }
};

function validaCurp() {

    /* alert(token); */
    var curp = $("#curp").val();

    $.ajax({

        type: 'POST',
        dataType: 'json',
        data: {
            "_token": $("meta[name='csrf-token']").attr("content"),
            "curp": curp
        },
        url: url + 'webservicerenapo',
        success: function (data) {
            if (data.user.nombre === null) {
                alert("Estimado/a usuario/a: Los datos ingresados no son correctos.");
            } else {
                //valida que menor tenga menor o igual de 5 años y medio
                if (validaCurpNinoMenorCincoAniosyMedio(data.user.fechNac)) {
                    $("#nombre_menor_1").val(data.user.nombre);
                    $("#apellido_paterno_1").val(data.user.apellido1);
                    $("#apellido_materno_1").val(data.user.apellido2);
                    var partesFechaForm = data.user.fechNac.split('/');
                    var fecha = partesFechaForm[1] + '/' + partesFechaForm[0] + '/' + partesFechaForm[2];
                    //console.log(typeof(fecha));
                    $("#birthday").val(fecha);
                    $("#curp_num").val(curp);
                    //valida la edad del menor exactamente con decimales ejemplo 2.5
                    difMes = mesActual - mesMenor;
                    console.log("algo", difMes, mesActual, mesMenor);
                    if (difMes < 0) {
                        var anioReal = (anioActual - anioMenor) - 1;
                    } else if (difMes >= 0) {
                        var anioReal = (anioActual - anioMenor);
                    }
                    console.log("modulo", numeroDeMeses % 12);
                    console.log("años", anioReal + '.' + numeroDeMeses % 12);
                    var anioConMeses = anioReal + '.' + numeroDeMeses % 12;
                    //setea campo de edad con decimales a input
                    $("#Edad_menor").val(anioConMeses);
                    $("#nextBtn").attr("disabled", false);
                    alert("La curp ingresada ha sido validada correctamente");
                } else {
                    $("#nextBtn").attr("disabled", true);
                    alert("Estimado usuario\nel menor no pudes ser registrado debido a que\nsupera la edad límite permitida");
                }
            }

        },
        error: function (data_e) {
            console.log(data_e);
            alert("La Curp ingresada no es válida");
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
        console.log("num de meses", numeroDeMeses);
        if (numeroDeMeses > 66) {
            return false;
            //return true;
        } else {
            return true;
            //return false;
        }

    }
}