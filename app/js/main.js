$(document).ready(function() {
	
	var location = window.location.href;
	var cur_url = location.split('/').pop();
	
	$('#main-menu li').each(function () {
		var link = $(this).find('a').attr('href');
		if (cur_url == link)
		{
			$(this).addClass('current');
		}
	});

	$(window).scroll(function() {
		if ($(this).scrollTop() > 100){
		$('.header').addClass("scroll");
		}
		else{
		$('.header').removeClass("scroll");
		}
	});

	/* mobile navigation */
	$('.m-burger').on('click', function(){
		$('.m-nav').addClass('m-nav-visible');
	});
	$('.m-nav__close').on('click', function(){
		$('.m-nav').removeClass('m-nav-visible');
	});

	$('.descr-tabs').responsiveTabs({
		startCollapsed: 'accordion'
	});

	$('.services-wrap').slick({
		slidesToShow: 5,
		slidesToScroll: 1,
		dots: false,
		nextArrow: '<div class="arrow arrow_right"><i class="fas fa-chevron-right"></i></div>',
		prevArrow: '<div class="arrow arrow_left"><i class="fas fa-chevron-left"></i></div>',
		responsive: [
			{
				breakpoint: 992,
				settings: {
					slidesToShow: 3
				}
			},
			{
				breakpoint: 768,
				settings: {
					slidesToShow: 2
				}
			},
			{
				breakpoint: 576,
				settings: {
					slidesToShow: 1
				}
			}
		]
	});

	$('.services-descr__slider').slick({
		slidesToShow: 1,
		slidesToScroll: 1,
		dots: false,
		arrows: false,
		asNavFor: '.slider-nav'
	});

	$('.slider-nav').slick({
		centerMode: true,
		centerPadding: '60px',
		slidesToShow: 4,
		slidesToScroll: 1,
		dots: false,
		nextArrow: '<div class="arrow arrow_right"><i class="fas fa-chevron-right"></i></div>',
		prevArrow: '<div class="arrow arrow_left"><i class="fas fa-chevron-left"></i></div>',
		asNavFor: '.services-descr__slider',
  	focusOnSelect: true
	});

	$('.comment-list').slick({
		slidesToShow: 3,
		slidesToScroll: 1,
		dots: false,
		nextArrow: '<div class="arrow arrow_right"><i class="fas fa-chevron-right"></i></div>',
		prevArrow: '<div class="arrow arrow_left"><i class="fas fa-chevron-left"></i></div>',
		responsive: [
			{
				breakpoint: 1301,
				settings: {
					slidesToShow: 2
				}
			},
			{
				breakpoint: 992,
				settings: {
					slidesToShow: 1
				}
			}
		]
	});

	/* tooltips */
	$('.tooltip').tooltipster();
	/* popup windows */

	$('.consultation-link').on('click', function(){
		$('.popup-overlay').addClass('popup-visible');
	});
	$('.popup-close').on('click', function(){
		$('.popup-overlay').removeClass('popup-visible');
	});

	$('.comment-links__add').on('click', function(){
		$('.popup-feedback-overlay').addClass('popup-visible');
	});
	$('.popup-close').on('click', function(){
		$('.popup-feedback-overlay').removeClass('popup-visible');
	});
});