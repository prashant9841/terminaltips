$('.side-navs .menu').addClass('collection').find('a').addClass('collection-item');

console.log('das');

$('.menu-item-32').on('click', function(event) {
	event.preventDefault();
	$('.search').fadeToggle('400');
});

$('.nav-toggle').on('click', function(event) {
	event.preventDefault();
	$('.nav-header ul.menu').toggleClass('show');
	$('.search').toggleClass('show');
});