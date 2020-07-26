var $$ = function(id){ try { return document.getElementById(id) } catch(err) { $err(err); } };

function validaCurp() {

    /* alert(token); */
    var curp = $("#curp" ).val();

    $.ajax({
        
        type: 'POST',
        dataType: 'json',
        data: {
                "_token":$("meta[name='csrf-token']").attr("content"),
                "curp":curp           
              },
        url: url+'webservicerenapo',
        success: function(data) 
        { 
            $("#nombre_menor_1" ).val(data.user.nombre);
            $("#apellido_paterno_1" ).val(data.user.apellido1);
            $("#apellido_materno_1" ).val(data.user.apellido2);
            $("#curp_num" ).val(curp);
            /* console.log(data); */
            alert("Los Datos se Consultaron Correctamente");
            
        },
        error: function(data_e)
        {
            console.log(data_e);
            alert("El Curp no se encuentra en nuestros Registros");
         }
    });
    
}