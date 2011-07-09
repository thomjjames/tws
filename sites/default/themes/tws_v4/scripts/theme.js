(function ($) {
  
	Drupal.behaviors.scrollAnchors = {
		attach: function(context, settings) {
      var h = window.location.host.toLowerCase();
		  $("a[href^='http']:not(a[href^='http://" + h + "']):not(a[href^='http://www." + h + "']), a[href$='.pdf']").attr("target", "_blank");		
				
			
			$('a[href*=#], a#top-link-a').click(function() {
			 if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
				 var $target = $(this.hash);
				 $target = $target.length && $target || $('[name=' + this.hash.slice(1) +']');
				 if ($target.length) {
					 var targetOffset = $target.offset().top;
					 $('html,body').animate({scrollTop: targetOffset}, 1000);
					 return false;
				 }
			 }
			});
		}
	};
	
})(jQuery);