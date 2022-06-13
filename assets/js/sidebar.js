$('.sidebar_menu').click(function(){
    $('.sidebar').addClass('show_sidebar');
});

$('.overlay_sidebar').click(function(){
    $('.sidebar').removeClass('show_sidebar');
});

$('.close_sidebar_button').click(function(){
    $('.sidebar').removeClass('show_sidebar');
});