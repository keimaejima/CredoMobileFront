
$(function(){
        $('#fr_moreread_button').on('click', function() {
            $('#fr_moreread_button').fadeOut('fast');
            $('#recent :nth-child(n+5)').fadeIn(1700);
        });
    });