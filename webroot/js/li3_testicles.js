$(function() {
	var current = window.location.pathname;
	$('.menu A').each(function(){
		if (current == $(this).attr('href')) {
			$(this).parent().attr('id', 'current');
			if ($(this).hasClass('menu-folder')) {
				window.location.replace('#current');
			} else {
				$(this).parents().each(function(){
					if ($(this).children('.menu-folder').attr('id', 'parent').length) {
						return false;
					}
				});
				window.location.replace('#parent');
			}
			return false;
		}
	});
});