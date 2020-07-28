var $$ = function(id){ try { return document.getElementById(id) } catch(err) { $err(err); } };

function validaRFC() {

    /* alert(token); */
    var rfc = $("#rfc" ).val();
    var tokenId = $("#tokenId" ).val();

    $.ajax({
        
        type: 'POST',
        dataType: 'json',
        data: {
                "_token":$("meta[name='csrf-token']").attr("content"),
                "rfc":rfc,
                "tokenId":tokenId
              },
        url: url+'guardar_inscripcion',
        success: function(data) 
        { 
            console.log(data);
            /* location.href = url+'inscripcion_front';
            $("#nombre_tutor_madres").val(data.user.CH_nombres);
            $("#apellido_paterno_tutor").val(data.user.CH_paterno);
            $("#apellido_materno_tutor").val(data.user.CH_materno);
            
            $("#tipo_nomina_1").val(data.user.TipoNomina);
            $("#num_empleado_1").val(data.user.NumEmpleado);
            $("#clave_dependencia_1").val(data.user.Clave_Dependencia);
            $("#nivel_salarial_1").val(data.user.NIVEL_SALARIAL);
            $("#seccion_sindical_1").val(data.user.SECCION_SINDICAL);
            $("#email_correo").val(data.user.CH_mail); */
            alert("Los Datos se Consultaron Correctamente");
            
        },
        error: function(data_e)
        {
            console.log(data_e);
            alert("El RFC no se encuentra en nuestros Registros");
         }
    });
    
}