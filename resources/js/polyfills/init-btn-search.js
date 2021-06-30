import { $body } from '../utils/globals';
import className from '../utils/constant-names';

const _element   = '.js-btn-search'
const $container = $(_element);

if ( $container.length ) {
	const $form = $( '.js-form-search' );

	$container.on( 'click', function( event ) {
		event.preventDefault();

		$body.toggleClass( className.ShowSearch );
		$body.removeClass( className.ShowNavMain );
	});

	$form.find( '.js__close' ).on( 'click', function( event ) {
		event.preventDefault();

		$body.removeClass( className.ShowSearch );
	});

	$body.on( 'click', function( event ) {
		const $target = $( event.target );
		const _notInViewport = !$target.hasClass( 'js-btn-search' ) && !$target.hasClass( 'js-form-search' ) && !$target.parents( '.js-form-search' ).length;

		if ( _notInViewport ) {
			$body.removeClass( className.ShowSearch );
		}
	});
}
