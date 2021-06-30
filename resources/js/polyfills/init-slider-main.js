import { tns } from "tiny-slider/src/tiny-slider"

const _element   = '.js-slider-main';
const $container = $(_element);

if ( $container.length ) {

	$container.find( '.js__slides' ).each( function() {
		tns({
			container: this,
			mode: 'gallery',
			items: 1,
			controls: false,
			navPosition: 'bottom',
			autoplay: true,
			autoplayTimeout: 8000,
			autoplayButtonOutput: false
		});
	});
}
