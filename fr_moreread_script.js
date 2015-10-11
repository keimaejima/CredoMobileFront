
$(function(){
        $('#recent .fr_btn').on('click', function() {
            $('#recent .fr_btn').fadeOut('fast');
            $('#recent :nth-child(n+5)').fadeIn(1700);
        });
    });
