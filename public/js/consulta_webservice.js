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
            /* console.log(data); */
            $("#nombre_menor_1" ).val(data.user.nombre);
            $("#apellido_paterno_1" ).val(data.user.apellido1);
            $("#apellido_materno_1" ).val(data.user.apellido2);
            $("#birthday" ).val(data.user.fechNac);
            $("#curp_num" ).val(curp);
            alert("La CURP ingresada ha sido validada ");
            
        },
        error: function(data_e)
        {
            console.log(data_e);
            alert("La Curp ingresada no ha sido identificada");
         }
    });
    
}