$('.top-nav-responsive').click(function() {
	$('.overlay-on-small').toggle();
	$('body').toggleClass('translate-body');
});

$('.overlay-on-small').click(function() {
	$(this).hide();
	$('body').removeClass('translate-body');
});


$('.plan-item').click(function(e) {
	e.preventDefault();

	var plan = $(this).attr('data-index');

	$('.plan-item').removeClass('plan-item--active');
	$(this).addClass('plan-item--active');

	$('.data-plan').hide();
	$('[data-plan="' + plan + '"]').show();
	$('html, body').animate({
		scrollTop: $('[data-plan="' + plan + '"]').offset().top
	}, '350ms');
	$('[data-plan="' + plan + '"]').children('section').addClass('animated fadeInUp');

});

$('.data-plan-price-list li').click(function() {

	var plan = $(this).attr('data-plan-price');

	$('.data-plan-price-list li').removeClass('active');
	$(this).addClass('active');

	$('.plan-description-item').removeClass('plan-description-item--active');
	$('[data-plan-description="' + plan + '"]').addClass('plan-description-item--active');

})