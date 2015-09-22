$function(){
	'use strict';
   	 $('#sentence p:nth-child(2)').append('<div id="button">もっと読む</div>');
        	$('#button').on('click', function() {
            		$('#button').fadeOut('fast');
            		$('#sentence p:nth-child(n+3)').fadeIn(1700);
        	});
    	});
