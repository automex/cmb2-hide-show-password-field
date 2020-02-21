var $ = jQuery; 
jQuery(document).ready(function($){
	$("#show_hide_password a, #show_hide_password_medium a").on('click', function(event) {
		event.preventDefault();
		if($(this).siblings('input').attr("type") == "text"){
			$(this).siblings('input').attr('type', 'password');
			$(this).find('span').addClass( "dashicons-hidden" );
			$(this).find('span').removeClass( "dashicons-visibility" );
		} else if($(this).siblings('input').attr("type") == "password"){
			$(this).siblings('input').attr('type', 'text');
			$(this).find('span').removeClass( "dashicons-hidden" );
			$(this).find('span').addClass( "dashicons-visibility" );
		}
	});
});