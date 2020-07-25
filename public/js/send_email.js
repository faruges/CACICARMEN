var $$ = function(id){ try { return document.getElementById(id) } catch(err) { $err(err); } };
/*  $(document).ready(function() { 

    $("#envia_email").on('click',function()
    {
        alert("hola");
    }); 
    
    
}); */
function envia_email(nombre,token) {
    
    $.ajax({
        
        type: 'POST',
        dataType: 'json',
        data: {
                "_token":token,
                "nombre":nombre           
              },
        url:url+'admin/email_info_recibida/sendEmailRecibi',
        success: function(data) 
        { 
            swal(
                {
                    type:'success',
                    title: data.message,                                                                  
                }                  
             )                 
        },
        error: function(data_e)
         {
            console.log(data_e);
         }
    });
    
}