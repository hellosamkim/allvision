import { tns } from "tiny-slider/src/tiny-slider"

const _element   = '.js-slider-brands';
const $container = $(_element);

if ( $container.length ) {

	$container.find( '.js__slides' ).each( function() {
		tns({
			container: this,
			items: 5,
			controls: false,
			navPosition: 'bottom',
			gutter: 20,
			autoplay: true,
			autoplayButtonOutput: false,
			responsive: {
				0: {
					items: 2
				},
				768: {
					items: 3
				},
				1024: {
					items: 5
				}
			}
		});
	});
}
