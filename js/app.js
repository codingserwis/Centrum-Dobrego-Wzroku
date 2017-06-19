//Sticky menu
function stickyMenu(element, element2){
	jQuery(window).scroll(function(event) {
		if(jQuery(this).scrollTop() > element){
			element2.addClass('sticky');
		} else {
			element2.removeClass('sticky');
		}
		
	});
}
jQuery(function() {
	var header = jQuery('.header_container').height(),
		nav = jQuery('nav'),
		toTop = jQuery('a[href="#top"]'),
		elements = jQuery('html, body');
// Scrolling to top
		toTop.click(function(e) {
			e.preventDefault();
			elements.animate({scrollTop : 0}, 700);
		});

	stickyMenu(header, nav);

});
// Showing to top button on the right side of page
jQuery(document).scroll(function(){
	var toTopBtn = jQuery('.to-top-box'),
		top = jQuery(window).scrollTop();
	if(top > 300) {
		toTopBtn.addClass('show');
	} else {
		toTopBtn.removeClass('show');
	}
});