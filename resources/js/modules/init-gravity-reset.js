import { $document, $window, $body } from '../utils/globals';
import className from '../utils/constant-names';

/**
 * Init Gravity Reset
 * 
 * @return {void}
 */
const initGravityReset = (_element = '.gform_wrapper') => {

    const $container = $( _element );

    if ( !$container.length ) {
        return false;
    }

    const _files = [
        'gforms_reset_css-css',
        'gforms_formsmain_css-css',
        'gforms_ready_class_css-css',
        'gforms_browsers_css-css',
        'gforms_stripe_frontend-css',
    ];

    let _timer = null;

    $.each(_files, function(index, value) {

        const $id = $('#' + value);

        if ($id.length) {
            $id.remove();
        }
    });

    $window.on( 'load', function() {
        updateSubmitButton();
    });

    $document.on( 'gform_post_render', function() {
        updateSubmitButton();
        
        clearTimeout( _timer );

        _timer = setTimeout(function() {
            const $isConfirm = $body.find( '.gform_confirmation_wrapper' ).length;
            
            if ( $isConfirm ) {
                $body.removeClass( className.ShowPopup );
            }
        }, 2000);

    });

    function updateSubmitButton() {
        $container.each( function() {
            const $this       = $(this);
            const $button     = $this.find( '.btn' );
            const $submit     = $this.find( 'input[type="submit"]' );
            const _text       = $submit.attr( 'value' );

            if ( ! $button.length ) {
                const _htmlButton = `
                    <button type="submit" class="btn btn--size-large">
                        <span class="btn__body">
                            <span>${_text}</span>

                            <i class="ico-arrow">
                                <svg viewBox="0 0 13.99 13.99">
                                    <path d="M7,0,5.76,1.23l4.88,4.89H0V7.87H10.64L5.76,12.75,7,14l7-7Z" />
                                </svg>
                            </i>
                        </span>

                        <span class="btn__hover">
                            <span>${_text}</span>

                            <i class="ico-arrow">
                                <svg viewBox="0 0 13.99 13.99">
                                    <path d="M7,0,5.76,1.23l4.88,4.89H0V7.87H10.64L5.76,12.75,7,14l7-7Z" />
                                </svg>
                            </i>
                        </span>
                    </button>`;

                $this.find( '.gform_footer').prepend( _htmlButton );
            }
        });
    }    
};

export default initGravityReset;
