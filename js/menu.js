$(document).ready(function (){
    var menu = $(".nav-tabs li");
    menu.click(function(){
        menu.removeClass("active");
        $(this).addClass("active");
    });
    if( $(window).width() <= 800 ){
        $('.tituloMovil').removeClass('d-none');
    }
 
});