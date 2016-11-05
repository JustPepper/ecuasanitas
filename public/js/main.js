$('.top-nav-responsive').click(function() {
	$('.overlay-on-small').toggle();
	$('body').toggleClass('translate-body');
});

$('.overlay-on-small').click(function() {
	$(this).hide();
	$('body').removeClass('translate-body');
});


