"use strict";

var $$ = function $$(id) {
  try {
    return document.getElementById(id);
  } catch (err) {
    $err(err);
  }
};

function mayus(objeto_input) {
  objeto_input.value = objeto_input.value.toUpperCase();
}

$(document).ready(function () {
  $("#curp").blur(function () {
    var curpValido = $("#curp").val();
    var valCurp = '[A-Z][A,E,I,O,U,X][A-Z]{2}[0-9]{2}[0-1][0-9][0-3][0-9][M,H][A-Z]{2}[B,C,D,F,G,H,J,K,L,M,N,Ñ,P,Q,R,S,T,V,W,X,Y,Z]{3}[0-9,A-Z][0-9]';
    var validado = curpValido.match(valCurp);

    if (!validado) {
      $("#curp").val('');
      alert("Curp no válido");
    } else {//alert("Curp valido");
    }
  });
  $("#codigo_postal").blur(function () {
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
      success: function success(data) {
        if (data.resultado.length <= 0) {
          $('#alcaldia').val('');
          $('#codigo_postal').css('background', '#ffe6e6'); //console.log("no trae ni maiz");
        } else {
          //console.log("vamo a ver que pedo");
          $('#codigo_postal').css('background', '#ffffff');
          $('#colonia').empty();
          data.resultado.forEach(function (element) {
            //console.log(element['d_asenta']);
            //console.log(element['D_mnpio']);
            $('#colonia').append($('<option></option>').val(element['d_asenta']).html(element['d_asenta'])); //colonia = element['d_asenta'];

            alcaldia = element['D_mnpio'];
          }); //$('#colonia').val(colonia);

          $('#alcaldia').val(alcaldia);
          /* alert("Los Datos se Consultaron Correctamente"); */
        }
      },
      error: function error(data_e) {
        console.log(data_e);
        alert("El Codigo Postal no se encuentra en nuestros Registros");
      }
    });
  });
  $("#telefono_uno").blur(function () {
    var telefono_uno = $("#telefono_uno").val();
    var valTelefono = '[0-9]{10}';
    var validado = telefono_uno.match(valTelefono);

    if (!validado) {
      $("#telefono_uno").val('');
      $('#telefono_uno').css('background', '#ffe6e6'); //alert("Telefono no válido");
    } else {
      $('#telefono_uno').css('background', '#ffffff'); //alert("Telefono valido");
    }
  });
  $("#telefono_dos").blur(function () {
    var telefono_dos = $("#telefono_dos").val();
    var valTelefono = '[0-9]{10}';
    var validado = telefono_dos.match(valTelefono);

    if (!validado) {
      $("#telefono_dos").val('');
      $('#telefono_dos').css('background', '#ffe6e6'); //alert("Telefono no válido");
    } else {
      $('#telefono_dos').css('background', '#ffffff'); //alert("Telefono válido");
    }
  });
  $("#numero_domicilio").blur(function () {
    var numero = $("#numero_domicilio").val();
    var valNumero = '[0-9]';
    var validado = numero.match(valNumero);

    if (!validado) {
      $("#numero_domicilio").val('');
      $('#numero_domicilio').css('background', '#ffe6e6'); //alert("Número no válido");
    } else {
      $('#numero_domicilio').css('background', '#ffffff');
    }
  });
  $("#terminos").on('change', function () {
    if ($('#terminos').is(':checked')) {
      $("#nextBtn").attr("disabled", false); //console.log($('#terminos').value);
    } else {
      $("#nextBtn").attr("disabled", true); //console.log($('#terminos').value);
    }
  });
  $("#filename_act").on('change', function () {
    var tamanioArchivoPermitido = 2000000;
    var dato_archivo_act = $('#filename_act').prop("files")[0];

    if (dato_archivo_act.size > tamanioArchivoPermitido) {
      //console.log(dato_archivo_act.size);
      $("#nextBtn").attr("disabled", true);
      Swal.fire({
        title: 'El tamaño del archivo no debe de exceder los 2 Mb',
        text: 'Por favor seleccione un archivo que no exceda el tamaño permitido',
        icon: 'warning',
        showCancelButton: false,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Ok',
        allowOutsideClick: false
      });
    } else {
      //alert("si hiciste caso se habilita boton");
      $("#nextBtn").attr("disabled", false);
    }
  });
  $("#filename_nac").on('change', function () {
    var tamanioArchivoPermitido = 2000000;
    var dato_archivo_act = $('#filename_nac').prop("files")[0];

    if (dato_archivo_act.size > tamanioArchivoPermitido) {
      //console.log(dato_archivo_act.size);
      $("#nextBtn").attr("disabled", true);
      Swal.fire({
        title: 'El tamaño del archivo no debe de exceder los 2 Mb',
        text: 'Por favor seleccione un archivo que no exceda el tamaño permitido',
        icon: 'warning',
        showCancelButton: false,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Ok',
        allowOutsideClick: false
      });
    } else {
      //alert("si hiciste caso se habilita boton");
      $("#nextBtn").attr("disabled", false);
    }
  });
  $("#filename_vacu").on('change', function () {
    var tamanioArchivoPermitido = 2000000;
    var dato_archivo_act = $('#filename_vacu').prop("files")[0];

    if (dato_archivo_act.size > tamanioArchivoPermitido) {
      //console.log(dato_archivo_act.size);
      $("#nextBtn").attr("disabled", true);
      Swal.fire({
        title: 'El tamaño del archivo no debe de exceder los 2 Mb',
        text: 'Por favor seleccione un archivo que no exceda el tamaño permitido',
        icon: 'warning',
        showCancelButton: false,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Ok',
        allowOutsideClick: false
      });
    } else {
      $("#nextBtn").attr("disabled", false);
    }
  });
  $("#filename_com").on('change', function () {
    var tamanioArchivoPermitido = 2000000;
    var dato_archivo_act = $('#filename_com').prop("files")[0];

    if (dato_archivo_act.size > tamanioArchivoPermitido) {
      //console.log(dato_archivo_act.size);
      $("#nextBtn").attr("disabled", true);
      Swal.fire({
        title: 'El tamaño del archivo no debe de exceder los 2 Mb',
        text: 'Por favor seleccione un archivo que no exceda el tamaño permitido',
        icon: 'warning',
        showCancelButton: false,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Ok',
        allowOutsideClick: false
      });
    } else {
      $("#nextBtn").attr("disabled", false);
    }
  });
  $("#filename_disc").on('change', function () {
    var tamanioArchivoPermitido = 2000000;
    var dato_archivo_act = $('#filename_disc').prop("files")[0];

    if (dato_archivo_act.size > tamanioArchivoPermitido) {
      //console.log(dato_archivo_act.size);
      $("#nextBtn").attr("disabled", true);
      Swal.fire({
        title: 'El tamaño del archivo no debe de exceder los 2 Mb',
        text: 'Por favor seleccione un archivo que no exceda el tamaño permitido',
        icon: 'warning',
        showCancelButton: false,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Ok',
        allowOutsideClick: false
      });
    } else {
      $("#nextBtn").attr("disabled", false);
    }
  });
  $("#filename_trab").on('change', function () {
    var tamanioArchivoPermitido = 2000000;
    var dato_archivo_act = $('#filename_trab').prop("files")[0];

    if (dato_archivo_act.size > tamanioArchivoPermitido) {
      //console.log(dato_archivo_act.size);
      $("#nextBtn").attr("disabled", true);
      Swal.fire({
        title: 'El tamaño del archivo no debe de exceder los 2 Mb',
        text: 'Por favor seleccione un archivo que no exceda el tamaño permitido',
        icon: 'warning',
        showCancelButton: false,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Ok',
        allowOutsideClick: false
      });
    } else {
      $("#nextBtn").attr("disabled", false);
    }
  });
});