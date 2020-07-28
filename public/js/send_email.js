var $$ = function(id){ try { return document.getElementById(id) } catch(err) { $err(err); } };
/*  $(document).ready(function() { 

    $("#envia_email").on('click',function()
    {
        alert("hola");
    }); 
    
    
}); */
function envia_email() {

    var nombre_tutor = $("#nombre_tutor" ).val();
    var ape_paterno = $("#ape_paterno" ).val();
    var email = $("#email" ).val();
    /* console.log(nombre_tutor); */
    $.ajax({
        
        type: 'POST',
        dataType: 'json',
        data: {
                "_token":$("meta[name='csrf-token']").attr("content"),
                "nombre":nombre_tutor,
                "ape_paterno":ape_paterno,           
                "email":email           
              },
        url:url+'admin/email_info_recibida_reinscri',
        success: function(data) 
        { 
            /* swal(
                {
                    type:'success',
                    title: data.message,                                                                  
                }                  
                )         */         
                alert("Email Enviado Correctamente");
        },
        error: function(data_e)
         {
            console.log(data_e);
            alert("Error al enviar el correo");
         }
    });
    
}
function envia_email_recib_inscri() {

    var nombre_tutor = $("#nombre_tutor" ).val();
    var ape_paterno = $("#ape_paterno" ).val();
    var email = $("#email" ).val();
    /* console.log(nombre_tutor); */
    $.ajax({
        
        type: 'POST',
        dataType: 'json',
        data: {
                "_token":$("meta[name='csrf-token']").attr("content"),
                "nombre":nombre_tutor,
                "ape_paterno":ape_paterno,           
                "email":email           
              },
        url:url+'admin/email_info_recibida_inscr',
        success: function(data) 
        { 
            /* swal(
                {
                    type:'success',
                    title: data.message,                                                                  
                }                  
                )         */         
                alert("Email Enviado Correctamente");
        },
        error: function(data_e)
         {
            console.log(data_e);
            alert("Error al enviar el correo");
         }
    });
    
}
function envia_email_info_recib_inscr() {

    var nombre_tutor = $("#nombre_tutor" ).val();
    var ape_paterno = $("#ape_paterno" ).val();
    var email = $("#email" ).val();
    /* console.log(nombre_tutor); */
    $.ajax({
        
        type: 'POST',
        dataType: 'json',
        data: {
                "_token":$("meta[name='csrf-token']").attr("content"),
                "nombre":nombre_tutor,
                "ape_paterno":ape_paterno,           
                "email":email           
              },
        url:url+'admin/email_info_recibida',
        success: function(data) 
        { 
            /* swal(
                {
                    type:'success',
                    title: data.message,                                                                  
                }                  
                )         */         
                alert("Email Enviado Correctamente");
        },
        error: function(data_e)
         {
            console.log(data_e);
            alert("Error al enviar el correo");
         }
    });
    
}