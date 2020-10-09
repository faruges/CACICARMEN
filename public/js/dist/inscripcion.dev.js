"use strict";

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
  var dato_archivo_trab = $('#filename_trab').prop("files")[0]; //console.log("esto tiene", dato_archivo_disc, dato_archivo_trab);
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
    success: function success(data) {
      //console.log(data);
      if (data.ok) {
        if (data.Exist) {
          Swal.fire({
            icon: 'warning',
            title: data.result,
            showConfirmButton: false,
            timer: 10000,
            allowOutsideClick: false
          }).then(function (result) {
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
        }).then(function (result) {
          if (result.dismiss === Swal.DismissReason.timer) {
            $("#new_reminder").modal("hide");
            location.href = url + 'inicio'; //document.getElementById("regForm").submit();
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
          }).then(function (result) {
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
          }).then(function (result) {
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
        }).then(function (result) {
          if (result.dismiss === Swal.DismissReason.timer) {
            location.href = url + 'inscripcion_from';
          }
        });
      } //alert("Los Datos se Consultaron Correctamente");

    },
    error: function error(data_e) {
      console.log(data_e); //alert("No se pudo inscribir");
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
    success: function success(data) {
      //console.log(data);
      if (data.ok) {
        if (data.Exist) {
          Swal.fire({
            icon: 'warning',
            title: data.result,
            showConfirmButton: false,
            timer: 10000,
            allowOutsideClick: false
          }).then(function (result) {
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
        }).then(function (result) {
          if (result.dismiss === Swal.DismissReason.timer) {
            $("#new_reminder").modal("hide");
            location.href = url + 'inicio'; //document.getElementById("regForm").submit();
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
          }).then(function (result) {
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
          }).then(function (result) {
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
        }).then(function (result) {
          if (result.dismiss === Swal.DismissReason.timer) {
            location.href = url + 'reinscripcion';
          }
        });
      } //alert("Los Datos se Consultaron Correctamente");

    },
    error: function error(data_e) {
      console.log(data_e); //alert("No se pudo inscribir");
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
    success: function success(data) {
      console.log(data);
      alert("Los Datos se Insertaron Correctamente");
    },
    error: function error(data_e) {
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
    success: function success(data) {
      console.log(data);
      alert("Los Datos se Actualizaron Correctamente");
    },
    error: function error(data_e) {
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
    success: function success(data) {
      console.log(data);
      alert("Los Datos se Insertaron Correctamente");
    },
    error: function error(data_e) {
      console.log(data_e);
      alert("No se pudo inscribir");
    }
  });
}