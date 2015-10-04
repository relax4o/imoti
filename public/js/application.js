
(function($) {
 "use strict"
 
 //Parallax
	$(window).bind('body', function() {
		parallaxInit();
	});
	function parallaxInit() {
		$('#one-parallax').parallax("30%", 0.1);
		$('#two-parallax').parallax("30%", 0.1);
		$('#three-parallax').parallax("30%", 0.1);
		$('#four-parallax').parallax("30%", 0.4);
	}

// FitDiv
	$("body").fitVids();	
	
// Form enter
/** 
	$('#loginform').on('keydown', 'input', function ( e ) {
		if ( e.which == 13 ) {
			//$(this).next('input').focus();
			console.log($(this).next();
            e.preventDefault();
		}
	});
*/

// Menu
	$('.dropdown-toggle').dropdownHover().dropdown();
	$(document).on('click', '.fhmm .dropdown-menu', function(e) {
		e.stopPropagation()
	})
	
// DM Menu
	jQuery('.navbar').affix({
		offset: { top: $('.navbar').offset().top }
	});
	
// Tooltips 
$('.social, .topflags, .agent_img, .bs-example-tooltips').tooltip({
	selector: "[data-toggle=tooltip]",
	container: "body"
})

$('.popover-test').popover()
	
// popover demo
$("[data-toggle=popover]")
	.popover()
	  
// Selector 
$(window).on('load', function () {
	$('.selectpicker').selectpicker({
		'selectedText': 'cat'
	});
});

// FancyBox
$(".fancybox").on("click", function(){
	$.fancybox({
		helpers: {
		overlay: {
		locked: false
		}
		},
		href: this.href,
		type: $(this).data("type")
		}); // fancybox
	return false   
});

	// Selector 
	$(window).on('load', function () {
		$('.selectpicker').selectpicker({
			'selectedText': 'cat'
		});
	});

})(jQuery);