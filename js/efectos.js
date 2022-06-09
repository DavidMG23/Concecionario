$(document).ready(function(){
    if ($(window).width() < 800) {
        $('#mensaje').removeClass('d-none');
        $('.contacto').removeClass('d-none');

    } else {
        $('#mensaje').addClass('d-none'); 
        $('.contacto').addClass('d-none'); 
    }
});