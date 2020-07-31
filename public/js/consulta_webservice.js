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
            var partesFecha = data.user.fechNac.split('/');
            var fechaMenor = new Date(partesFecha[2],partesFecha[1]-1,partesFecha[0]);
            /* var fechaMenor = new Date(2019,1-1,25); */
            var fechaActual = new Date();
            /* console.log("año menor",fechaMenor); */
            var anioMenor=fechaMenor.getFullYear();
            var anioActual=fechaActual.getFullYear();
            var mesMenor = fechaMenor.getMonth();
            var mesActual = fechaActual.getMonth();
            numeroDeMeses=(anioActual-anioMenor)*12+(mesActual-mesMenor);
            difMes = mesActual-mesMenor;
            if(difMes < 0){
                var anioReal=(anioActual-anioMenor)-1;
            }else if(difMes >= 0){
                var anioReal=(anioActual-anioMenor);
            }
            /* console.log("num de meses",numeroDeMeses);
            console.log("modulo",numeroDeMeses % 12);
            console.log("años",anioReal+'.'+numeroDeMeses % 12); */
            var anioConMeses = anioReal+'.'+numeroDeMeses % 12;
            $("#Edad_menor").val(anioConMeses); 
            alert("El curp proporcionado fue consultado ante\nEl Registro Nacional de Población (RENAPO) correctamente");            

        },
        error: function(data_e)
        {
            console.log(data_e);
            alert("La Curp ingresada no ha sido identificada");
         }
    });
    
}