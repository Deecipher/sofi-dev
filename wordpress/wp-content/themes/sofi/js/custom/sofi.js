// SOFI Custom Admin JS

jQuery(document).ready(function($) {
	// Make sure video is wraped in responsive class
	$('iframe').wrap('<div class="flex-video widescreen" />');

	// Show hide agenda days
	$('.agenda-filter-day').click(function(){
		var day = $(this).attr('day');
		if (!$(this).hasClass('active')) {
			// console.log ('You clicked a filter with day ' + day);
			// console.log ('You clicked a filter without the class active');
			$(this).addClass('active').siblings().removeClass('active');
			$('.agenda-content-day[day=' + day +']').slideDown().siblings().slideUp();
			$('.agenda-day-title[day=' + day +']').show().siblings('.agenda-day-title').hide();
		}
	});

	/////////////////////////////
	// RESOURCES ///////////////
	///////////////////////////

	var resCat = $('.resource-filter.active').attr('cat');
	$('.resource.'+resCat).show();

	$('.resource-filter').click(function(){
		var resCat = $(this).attr('cat');
		if (!$(this).hasClass('active')) {
			$(this).addClass('active').siblings().removeClass('active');
			$('.resource.'+resCat).siblings().fadeOut(function(){
				$('.resource.'+resCat).delay(444).fadeIn();
			});
		}
	});

});