var $$ = function(id){ try { return document.getElementById(id) } catch(err) { $err(err); } };

function mayus(objeto_input) {
    objeto_input.value = objeto_input.value.toUpperCase();
}

$(document).ready(function() { 
    $("#curp").blur(function(){
        var curpValido = $("#curp").val();
        const valCurp = '[A-Z][A,E,I,O,U,X][A-Z]{2}[0-9]{2}[0-1][0-9][0-3][0-9][M,H][A-Z]{2}[B,C,D,F,G,H,J,K,L,M,N,Ñ,P,Q,R,S,T,V,W,X,Y,Z]{3}[0-9,A-Z][0-9]';
        var validado = curpValido.match(valCurp);
        if(!validado){
            $("#curp").val('');
            alert("Curp no válido");
        }else{
            //alert("Curp valido");
        }
    });
    $("#telefono_uno").blur(function(){
        var telefono_uno = $("#telefono_uno").val();
        const valTelefono = '[0-9]{10}';
        var validado = telefono_uno.match(valTelefono);
        if(!validado){
            $("#telefono_uno").val('');
            alert("Telefono no válido");
        }else{
            //alert("Telefono valido");
        }
    });
    $("#telefono_dos").blur(function(){
        var telefono_dos = $("#telefono_dos").val();
        const valTelefono = '[0-9]{10}';
        var validado = telefono_dos.match(valTelefono);
        if(!validado){
            $("#telefono_dos").val('');
            alert("Telefono no válido");
        }else{
            //alert("Telefono válido");
        }
    });
});