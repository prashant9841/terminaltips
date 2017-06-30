$('.side-navs .menu').addClass('collection').find('a').addClass('collection-item');

console.log('das');

$('.menu-item-32').on('click', function(event) {
	event.preventDefault();
	$('.search').fadeToggle('400');
});