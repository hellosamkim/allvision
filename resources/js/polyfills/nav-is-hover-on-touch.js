import { $body } from '../utils/globals';
import className from '../utils/constant-names';

const _element   = '.nav'
const $container = $(_element);

if ( $container.length ) {

	$container.find('a').on('click', function( event ) {

		if ( $body.hasClass(className.IsTouch ) ) {
			const $parent    = $(this).parent();
			const _haveChild = $parent.find('> ul').length;

			if (! $parent.hasClass( className.Hover ) && _haveChild ) {
				event.preventDefault();

				$parent
					.addClass( className.Hover )
					.siblings()
					.removeClass( className.Hover );
			}
		}
	});

	$body.on('click', function(event) {

		if ( $body.hasClass( className.IsTouch ) ) {
			const $target = $( event.target );
			const isOnTarget = !$target.parents(_element).length && !$target.hasClass(_element);

			if ( isOnTarget ) {
				$container
					.find( '.' + className.Hover )
					.removeClass( className.Hover );
			}
		}
	});
}

