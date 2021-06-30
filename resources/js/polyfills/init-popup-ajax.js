import 'magnific-popup';

const _element   = '.js-popup-ajax';
const $container = $(_element);

if ( $container.length ) {
	$container.magnificPopup({
		type: 'ajax',
		removalDelay: 100,
		mainClass: 'mfp-fade',
		cursor: 'mfp-ajax-cur',
		tError: '<a href="%url%">The content</a> could not be loaded.',
		closeMarkup: '<button title="%title%" type="button" class="mfp-close mfp-close--white">&#215;</button>',
		callbacks: {
			parseAjax: function( mfpResponse ) {
				mfpResponse.data = $(mfpResponse.data).find('.js-main');
			}
		}
	});
}
