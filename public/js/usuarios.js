$(document).ready(function () {
    $("#rol").blur(function () {
        var rol = $("#rol").val();
        switch (rol) {
            case 'super_caci':
                $('#email').val('caciadministracion@finanzas.cdmx.gob.mx');
                break;
            case 'caciluz':
                $('#email').val('caciluzmariagomez@finanzas.cdmx.gob.mx');
                break;
            case 'cacieva':
                $('#email').val('cacievamoreno@finanzas.cdmx.gob.mx');
                break;
            case 'cacibertha':
                $('#email').val('caciberthavonglumer@finanzas.cdmx.gob.mx');
                break;
            case 'cacicarolina':
                $('#email').val('cacicarolinaagazzi@finanzas.cdmx.gob.mx');
                break;
            case 'cacicarmen':
                $('#email').val('cacicarmenserdan@finanzas.cdmx.gob.mx');
                break;
        }
        //alert(rol);
    });
});
