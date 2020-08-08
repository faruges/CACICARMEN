function inscripcion() {

    //alert("si llega");
    //document.getElementById("regForm").submit();
    /* alert(token); */
    var nombre_tutor_madres = $("#nombre_tutor_madres").val();
    var apellido_paterno_tutor = $("#apellido_paterno_tutor").val();
    var apellido_materno_tutor = $("#apellido_materno_tutor").val();
    var tipo_nomina_1 = $("#tipo_nomina_1").val();
    var num_empleado_1 = $("#num_empleado_1").val();
    var num_plaza_1 = $("#num_plaza_1").val();
    var clave_dependencia_1 = $("#clave_dependencia_1").val();
    var nivel_salarial_1 = $("#nivel_salarial_1").val();
    var seccion_sindical_1 = $("#seccion_sindical_1").val();

    var email_correo = $("#email_correo").val();

    var calle = $("#calle").val();
    var numero_domicilio = $("#numero_domicilio").val();
    var colonia = $("#colonia").val();
    var alcaldia = $("#alcaldia").val();
    var codigo_postal = $("#codigo_postal").val();

    var telefono_celular = $("#telefono_celular").val();
    var telefono_3 = $("#telefono_3").val();
    var horario_laboral_ent = $("#horario_laboral_ent").val();
    var horario_laboral_sal = $("#horario_laboral_sal").val();

    var nombre_menor_1 = $("#nombre_menor_1").val();
    var apellido_paterno_1 = $("#apellido_paterno_1").val();
    var apellido_materno_1 = $("#apellido_materno_1").val();
    var curp_num = $("#curp_num").val();
    var birthday = $("#birthday").val();
    var Edad_menor = $("#Edad_menor").val();
    var caci = $("#caci").val();

    $.ajax({
        type: 'POST',
        dataType: 'json',
        data: {
            "_token": $("meta[name='csrf-token']").attr("content"),
            "nombre_tutor_madres": nombre_tutor_madres,
            "apellido_paterno_tutor": apellido_paterno_tutor,
            "apellido_materno_tutor": apellido_materno_tutor,
            "tipo_nomina_1": tipo_nomina_1,
            "num_empleado_1": num_empleado_1,
            "num_plaza_1": num_plaza_1,
            "clave_dependencia_1": clave_dependencia_1,
            "nivel_salarial_1": nivel_salarial_1,
            "seccion_sindical_1": seccion_sindical_1,
            "email_correo": email_correo,
            "calle": calle,
            "numero_domicilio": numero_domicilio,
            "colonia": colonia,
            "alcaldia": alcaldia,
            "codigo_postal": codigo_postal,
            "telefono_celular": telefono_celular,
            "telefono_3": telefono_3,
            "horario_laboral_ent": horario_laboral_ent,
            "horario_laboral_sal": horario_laboral_sal,
            "nombre_menor_1": nombre_menor_1,
            "apellido_paterno_1": apellido_paterno_1,
            "apellido_materno_1": apellido_materno_1,
            "curp_num": curp_num,
            "birthday": birthday,
            "Edad_menor": Edad_menor,
            "caci": caci
        },
        url: url + 'guardar_inscripcion_bd',
        success: function (data) {
            console.log(data);
            alert("Los Datos se Consultaron Correctamente");

        },
        error: function (data_e) {
            console.log(data_e);
            alert("No se pudo inscribir");
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
        success: function (data) {
            console.log(data);
            alert("Los Datos se Insertaron Correctamente");
        },
        error: function (data_e) {
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
        success: function (data) {
            console.log(data);
            alert("Los Datos se Actualizaron Correctamente");
        },
        error: function (data_e) {
            console.log(data_e);
            alert("No se pudo Actualizar");
        }

    });
}

function createRol(){
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
        success: function (data) {
            console.log(data);
            alert("Los Datos se Insertaron Correctamente");
        },
        error: function (data_e) {
            console.log(data_e);
            alert("No se pudo inscribir");
        }

    });   
}
