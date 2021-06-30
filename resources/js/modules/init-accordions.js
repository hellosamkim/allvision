import className from '../utils/constant-names';

/**
 * Init Accordions
 * 
 * @return {void}
 */
const initAccordions = (_element = '.js-accordion') => {
    const $container = $(_element);

    if (! $container.length ) {
    	return false;
    }

    $container.find('.js__head').on('click', function(event) {
        event.preventDefault();

        const $this   = $(this);
        const $parent = $this.parent();

        $parent
            .toggleClass(className.Active)
            .siblings()
            .removeClass(className.Active);
    });
};

export default initAccordions;