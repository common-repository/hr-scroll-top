(function($){
	'use strict';
	jQuery(document).ready(function(){
		
		// Hide and Show
		jQuery('.hrscroll-top a img').hide();
		jQuery(window).scroll(function(){
			if (jQuery(window).scrollTop() > 300) {
				jQuery('.hrscroll-top a img').fadeIn();
			}else{
				jQuery('.hrscroll-top a img').fadeOut();
			}
		});

	});
})(jQuery);


