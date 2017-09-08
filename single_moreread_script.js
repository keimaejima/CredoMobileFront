
jQuery(function(){
    jQuery('#sentence p:nth-child(2)').append('<div class="btn_single">もっと読む</div>');
        jQuery('#main .btn_single').on('click', function() {
            jQuery('#main .btn_single').fadeOut('fast');
            jQuery('#sentence p:nth-child(n+3)').fadeIn(1700);
        });
    });
