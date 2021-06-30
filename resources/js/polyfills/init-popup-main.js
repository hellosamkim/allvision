import { $window, $body } from '../utils/globals';
import className from '../utils/constant-names';

const _element   = '.js-section-popup';
const $container = $(_element);

if ( $container.length ) {	
	$('.js-popup-main').click(function(event){
		const $this = $(this);
		
		let _href = $this.attr('href');

		if( _href.indexOf('#') >= 0) {
			let _hash = _href.split('#');

			if(_hash[1].indexOf('-') >= 0){
				let _prefix = _hash[1].split('-');
				let $id = $('#' + _hash[1]);

				if ( _prefix[0] == 'popup' && $id.length ) {
					event.preventDefault();

					$body.addClass(className.ShowPopup);
					$id.addClass(className.Active).siblings().removeClass(className.Active);
				}
			}
		}
	});

	$container.on('click', '.js__close', function(event) {
		event.preventDefault();

		$body.removeClass(className.ShowPopup);

		setTimeout(function() {
			$container.find('.' + className.Active).removeClass(className.Active);
		}, 450);
	});

	$body.on('click touchstart', function(event) {
		const $target = $(event.target);
		const _notInViewport = !$target.parents('.section__popup').length && !$target.hasClass('section__popup') && $target.parents('.section-popup').length || $target.hasClass('section-popup');

		if ( _notInViewport ) {
			$body.removeClass( className.ShowPopup );

			setTimeout(function() {
				$container.find('.' + className.Active).removeClass(className.Active);
			}, 450);			
		}
	});
}

