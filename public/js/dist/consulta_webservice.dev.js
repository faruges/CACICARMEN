"use strict";

var $$ = function $$(id) {
  try {
    return document.getElementById(id);
  } catch (err) {
    $err(err);
  }
};

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
    success: function success(data) {
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
        } //valida que menor tenga menor o igual de 5 años y 11 meses


        if (validaCurpNinoMenorCincoAniosyMedio(data.datas.user.fechNac)) {
          $("#nombre_menor_1").val(data.datas.user.nombre);
          $("#apellido_paterno_1").val(data.datas.user.apellido1);
          $("#apellido_materno_1").val(data.datas.user.apellido2);
          var partesFechaForm = data.datas.user.fechNac.split('/');
          var fecha = partesFechaForm[1] + '/' + partesFechaForm[0] + '/' + partesFechaForm[2]; //console.log(typeof(fecha));

          $("#birthday").val(fecha);
          $("#curp_num").val(curp); //valida la edad del menor exactamente con decimales ejemplo 2.5

          difMes = mesActual - mesMenor; //console.log("algo", difMes, mesActual, mesMenor);

          if (difMes < 0) {
            var anioReal = anioActual - anioMenor - 1;
          } else if (difMes >= 0) {
            var anioReal = anioActual - anioMenor;
          } //console.log("modulo", numeroDeMeses % 12);
          //console.log("años", anioReal + '.' + numeroDeMeses % 12);


          var anioConMeses = anioReal + '.' + numeroDeMeses % 12; //setea campo de edad con decimales a input

          $("#Edad_menor").val(anioConMeses);
          $("#nextBtn").attr("disabled", false);
          alert("La curp ingresada ha sido validada correctamente");
        } else {
          $("#nextBtn").attr("disabled", true);
          alert("Estimado usuario\nel menor no puede ser registrado debido a que\nsupera la edad límite permitida");
        }
      }
    },
    error: function error(data_e) {
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
    mesActual = fechaActual.getMonth(); //mesSustraccion = mesActual - mesMenor;

    numeroDeMeses = (anioActual - anioMenor) * 12 + mesActual - mesMenor; //console.log("num de meses", numeroDeMeses);

    if (numeroDeMeses > 71) {
      return false; //return true;
    } else {
      return true; //return false;
    }
  }
}