
jQuery(function(){
        jQuery('.article_list .fr_btn').on('click', function() {
            jQuery('.article_list .fr_btn').fadeOut('fast');
            jQuery('.article_list li:nth-child(n+5)').fadeIn(1700);
        });
    });
