$function(){
	'use strict';
   	 $('#sentence p:nth-child(2)').append('<div id="button.more_read">もっと読む</div>');
        	$('#button').on('click', function() {
            		$('#button.more_read').fadeOut('fast');
            		$('#sentence p:nth-child(n+3)').fadeIn(1700);
        	});
    	});
