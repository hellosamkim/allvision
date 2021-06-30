import { $window } from '../utils/globals';
import { CountUp } from 'countup.js';

const InitCountUpScrollAnimation = (_element = '.js-counter') => {
	const $container = $( _element );

	if(!$container.length) {
		return false;
	}

	let _counter       = [];
	let _counterOffset = [];
	let _counterActive = [];

	const options = {
		duration: 5
	};

	$window.on('load resize orientationchange', function() {

		GetCounters();
	});

	$window.on('load scroll', function() {

		SetCounters( $window.scrollTop() );
	});

	function GetCounters() {

		$container.each( function( i ) {
			const $this = $(this);

			let _offset = parseInt( $this.offset().top - $window.height(), 0 );
				_offset = (_offset < 0) ? 0 : _offset;

			_counterOffset[i] = _offset;
			_counterActive[i] = false;
			_counter[i]       = new CountUp( this, parseInt( $this.data('count') ), options );
		});
	}

	function SetCounters(_scroll) {

		$.each(_counterOffset, function(index, value){
			if(_scroll >= value && _counterActive[index] == false) {
				_counterActive[index] = true;

				if (!_counter[index].error) {
					_counter[index].start();
				} else {
					console.error(_counter[index].error);
				}
			}
		});
	}
}

export default InitCountUpScrollAnimation;
