
$(function(){
	'use strict';
        $('#sentence p:nth-child(2)').append('<div id="#button.more_read">もっと読む</div>');
        $('#button.more_read').on('click', function() {
            $('#button.more_read').fadeOut('fast');
            $('#button.more_read p:nth-child(n+3)').fadeIn(1700);
        });
    });
