import 'magnific-popup';

const _element   = '.js-popup-inline';
const $container = $(_element);

if ( $container.length ) {
	$container.magnificPopup({
		type: 'inline',
		removalDelay: 100,
		mainClass: 'mfp-fade'
	});
}
