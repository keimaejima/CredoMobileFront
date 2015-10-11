
$(function(){
    $('#sentence p:nth-child(2)').append('<div class="btn_single">もっと読む</div>');
        $('#main .btn_single').on('click', function() {
            $('#main .btn_single').fadeOut('fast');
            $('#sentence p:nth-child(n+3)').fadeIn(1700);
        });
    });
