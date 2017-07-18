jQuery(window).load(function() {
	// Homepage Slider
	jQuery('#home-carousel').flexslider({
		animation: "slide",
		animationLoop: true,
		slideshow: false,
		itemWidth: 188,		
		asNavFor: '#home-slider'
	});
	
	jQuery('#home-slider').flexslider({
		animationLoop: false,
		slideshow: false,
		sync: "#home-carousel"
	});

	// Equal Heights
	jQuery.fn.equalHeights('.latest-reviews article, .listing article');

});

(function($) {
	//Submenu
	$('.nav').superfish({
		animation: {
			opacity: "show"
		},
		speed: "fast",
		delay: 250
	});

	// Form labels
	$.fn.formLabels(true);

	// Responsive Menu
	// Create the dropdown base
	$("<select class='alt-nav' />").appendTo("#navigation");

	// Create default option "Go to..."
	$("<option />", {
		"selected": "selected",
		"value"   : "",
		"text"    : "Go to..."
	}).appendTo("#navigation select");

	// Populate dropdown with menu items
	$("#navigation a").each(function() {
		var el = $(this);
		$("<option />", {
			"value"   : el.attr("href"),
			"text"    : el.text()
		}).appendTo("nav select");
	});

	$("#navigation select").change(function() {
		window.location = $(this).find("option:selected").val();
	});

	$(".meter > span").each(function() {
		$(this)
			.data("origWidth", $(this).width())
			.css('max-width', $(this).data("origWidth"))
	});
	
	//Block hover
	if( $('.fb').length > 0) {
	$(".fb").hover(
		function () {
			var o = $(this).find('.overlay');
			o.fadeIn('fast');
		},
		function () {
			$(this).find('.overlay').fadeOut('fast');
		});	
	}
	
	// Fancybox
	$('.fb').fancybox({
		padding: 0
	});
	
	// Fitvids
	$('.item-content').fitVids();
	
})(jQuery);