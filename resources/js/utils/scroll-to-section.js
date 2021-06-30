import { $htmlBody } from '../utils/globals';

/**
 * Scroll to section
 * 
 * @return {true or false}
 */
const scrollToSection = ( _element = '' ) => {
	let $element = $(_element);

	if (! $element.length) {
		return false;
	}
	
	let _offset     = $element.offset().top;
	let _header     = $('.header').innerHeight();
	let _wpAdmin    = ($('#wpadminbar').length) ? $('#wpadminbar').innerHeight() : 0;
	let _marginTop  = parseInt($element.css('margin-top'), 10);
	let _paddingTop = parseInt($element.css('padding-top'), 10);
	let _moreOffset = ( _marginTop > 0 && _paddingTop == 0 ) ? _marginTop : 0;
	let _sectionNav = ($('.js-section-nav-map').length) ? $('.js-section-nav-map').innerHeight() : 0;

	$htmlBody.delay(100).stop(true, true).animate({
		scrollTop: parseInt(_offset - _header - _wpAdmin - _moreOffset - _sectionNav, 10)
	}, 1000);
};

export default scrollToSection;
