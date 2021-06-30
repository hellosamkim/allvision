import scrollToSection from '../utils/scroll-to-section';
import { $window, $body } from '../utils/globals';

$window.on( 'load hashchange', function() {
    const _href = window.location.hash;

    getValueToScroll( _href );
});

$('a').on( 'click', function(event) {
    const $this = $(this);
    const _href = $this.attr( 'href' );

    getValueToScroll( _href );
});

function getValueToScroll( _href ) {
    if ( _href.indexOf('#') != -1 ) {
        const _hash = _href.split('#');
        const $id = $('[data-id="' + _hash[1] + '"]');

        if ( $id.length ) {
            event.preventDefault();

            scrollToSection( $id );
        }
    }    
}
