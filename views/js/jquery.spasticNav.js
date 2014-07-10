(function($) {

	$.fn.spasticNav = function(options) {

		options = $.extend({
			overlap : 20,
			speed : 500,
			reset : 500,
			color : 'transparent',
			easing : 'easeOutExpo'
		}, options);

		return this.each(function() {

		 	var nav = $(this),
		 		currentPageItem = $('.selected', nav),
		 		blob,
		 		reset;

		 	$('<li id="blob"></li>').css({
		 		width : currentPageItem.outerWidth() + 10,  
				height : currentPageItem.outerHeight() + options.overlap,  
				left : currentPageItem.position().left - 10,  
				top : currentPageItem.position().top - options.overlap / 2 + 2
		 	}).appendTo(this);

		 	blob = $('#blob', nav);

			$('li:not(#blob)', nav).live('hover', function(e) {
				if(e.type == 'mouseenter') {
					// mouse over
					clearTimeout(reset);
					blob.animate(
						{
							left : $(this).position().left - 10,
							width : $(this).width() + 10
						},
						{
							duration : options.speed,
							easing : options.easing,
							queue : false
						}
					);
				} else {
					// mouse out	
					reset = setTimeout(function() {
						blob.animate({
							width : currentPageItem.outerWidth() + 10,
							left : currentPageItem.position().left - 10
						}, options.speed)
					}, options.reset);
				}
			});
		}); // end each
	};
})(jQuery);
