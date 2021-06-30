import { $window, $body } from '../utils/globals';
import className from '../utils/constant-names';

const _element   = '.js-article-service';
const $container = $(_element);

if ( $container.length ) {
	$container.find( '.js__expand' ).on( 'click', function( event ) {
		event.preventDefault();

		const $this = $(this);
		const $parent = $this.closest( 'li' );

		$parent.toggleClass( className.Active );
		$parent.siblings().toggleClass( className.UnActive, $parent.hasClass( className.Active ) );
	});
}
