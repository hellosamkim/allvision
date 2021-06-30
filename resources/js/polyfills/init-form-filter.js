import { $window, $body } from '../utils/globals';
import className from '../utils/constant-names';

const _element   = '.js-form-filter';
const $container = $(_element);

if ( $container.length ) {
	$container.find( 'form' ).on( 'change', function() {
		setFilters();
	});

	$container.find( 'button[type="reset"]' ).on( 'click', function() {
		setFilters();
	});

	$container.find( '.js__expand' ).on( 'click', function( event ) {
		event.preventDefault();

		$body.addClass( className.ShowFilters );
	});

	$container.find( '.js__close' ).on( 'click', function( event ) {
		event.preventDefault();

		$body.removeClass( className.ShowFilters );
	});

	let _offset = null;
	let _scroll = 0;

	$window.on( 'scroll', function() {
		_scroll = $window.scrollTop();

		$body.toggleClass( className.ShowFixedFilter, $window.width() > 767 && _scroll >= _offset );
	});

	$window.on( 'load resize orientationchange', function() {
		setOffset();
	});

	function setOffset() {
		const $parent = $container.parent();
		const _height = parseInt($container.innerHeight(), 10);

		_offset = parseInt($parent.offset().top - $('.header').innerHeight(), 10);

		$parent.css( 'min-height', _height );
	}

	function setFilters() {
		console.log( 'Filtering!' );
	}
}
