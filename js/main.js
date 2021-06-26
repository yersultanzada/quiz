$(document).ready(function(){
	$('.our-works-slider').slick({
		infinite: true,
		slidesToShow: 3,
		slidesToScroll: 1,
		dots: false,
		responsive: [
		{
			breakpoint: 981,
			settings: {
				slidesToShow: 2,
				slidesToScroll: 1,
				infinite: true,
				dots: false
			}
		},
		{
			breakpoint: 481,
			settings: {
				slidesToShow: 1,
				slidesToScroll: 1,
				infinite: true,
				dots: false
			}
		}
		]
	});

	$('[data-fancybox="gallery"]').fancybox({
		buttons : [
		'zoom',
		'thumbs',
		'close'
		]
	});

	$(".main-btn").fancybox({
		buttons : [
		'close'
		],
		idleTime: 10
	});
});