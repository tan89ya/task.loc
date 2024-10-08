
document.addEventListener('DOMContentLoaded', () => {

	$('.news__blog h2').css('height', '').equalHeights();
	$('.news__blog p').css('height', '').equalHeights();

	$('document').ready(function() {
    $('.pagination a').each(function() {
        if ('http://task.loc/'+$(this).attr('href') == window.location.href)
        {
            $(this).addClass('active');
        }
    });
	});
})
