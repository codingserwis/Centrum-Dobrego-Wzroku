//Sticky menu
function stickyMenu(element, element2){
	$(window).scroll(function(event) {
		if($(this).scrollTop() > element){
			element2.addClass('sticky');
		} else {
			element2.removeClass('sticky');
		}
		
	});
}
$(function() {
	var header = $('.header_container').height(),
		nav = $('nav'),
		toTop = $('a[href="#top"]'),
		elements = $('html, body');
// Scrolling to top
		toTop.click(function(e) {
			e.preventDefault();
			elements.animate({scrollTop : 0}, 700);
		});

	stickyMenu(header, nav);

});
// Showing to top button on the right side of page
$(document).scroll(function(){
	var toTopBtn = $('.to-top-box'),
		top = $(window).scrollTop();
	if(top > 300) {
		toTopBtn.addClass('show');
	} else {
		toTopBtn.removeClass('show');
	}
});