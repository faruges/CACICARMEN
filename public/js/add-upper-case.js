var $$ = function(id){ try { return document.getElementById(id) } catch(err) { $err(err); } };

function mayus(objeto_input) {
    objeto_input.value = objeto_input.value.toUpperCase();
}