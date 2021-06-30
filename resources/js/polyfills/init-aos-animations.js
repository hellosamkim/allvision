import AOS from 'aos';

const _element   = '[data-aos]';
const $container = $(_element);

if ( $container.length ) {
	const _settings = {
		duration: 800,
		once: true
	};

	AOS.init( _settings );
}
