jQuery(document).ready(function($){
    $('dd').hide();
    $('dt').click(function(){
        //Expands FAQ Answers
        $(this).next().slideToggle('slow');

        //Toggle Plus/Minus icon on FAQ Expansion
        let icon = $(this).find('.expand-icon').children();

        if(icon.hasClass('fa-plus-circle')){
            icon.removeClass('fa-plus-circle').addClass('fa-minus-circle');
        } else {
            icon.removeClass('fa-minus-circle').addClass('fa-plus-circle');
        }
    })

    //Check email form and enable submit button when filled out
    $('.emailForm textarea').keypress(function(){
        if($('.emailForm #name').val() != '' && $('.emailForm #email').val() != ''){
            $('.submit-button').prop('disabled', false);
        }
    })

    //For Mobile navigation
    $(window).resize(function(){
        if ($(window).width() < 992){
            $('.mobile-menu').addClass('navbar-collapse');
        } else {
            $('.mobile-menu').removeClass('navbar-collapse');
        }
    })
    //For when the window starts small
    if ($(window).width() < 992){
        $('.mobile-menu').addClass('navbar-collapse');
    }

})
