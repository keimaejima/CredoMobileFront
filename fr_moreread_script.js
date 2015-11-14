
jQuery(function(){
        jQuery('#recent .fr_btn').on('click', function() {
            jQuery('#recent .fr_btn').fadeOut('fast');
            jQuery('#recent :nth-child(n+5)').fadeIn(1700);
        });
    });
