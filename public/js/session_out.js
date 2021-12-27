$(document).ready(function () {
    sessionTimeout({
        warnAfter: 3600000,
        logOutUrl: 'seguridad/logout',
        timeOutAfter: 3900000,
        timeOutUrl: 'seguridad/logout',
        message: '¿Estas todavia aqui?',
        logOutBtnText:'Cerrar Sesión',
        titleText:'La Sesión esta por expirar',
        stayConnectedBtnText: 'Mantenerse Conectado'        
    });
});