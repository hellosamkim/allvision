import { $window, $body } from '../utils/globals';
import className from '../utils/constant-names';
import { CountUp } from 'countup.js';

const _element   = '.js-counter-scroll';
const $container = $(_element);

if ( $container.length ) {
	let _offsetTop     = [];
	let _offsetBottom  = [];
	let _counter       = [];
	let _counterFrom   = [];
	let _counterTo     = [];
	let _counterActive = [];
	let _lastValue     = [];
	let _scroll        = 0;

	const options = {
		duration: 2
	};	

	setCounters();
	setOffsets();

	$window.on( 'load resize orientatinchange', function() {
		setOffsets();
	});

	$window.on( 'scroll', function() {
		_scroll = $window.scrollTop();

		setScrollAnimation();
	});

	function setCounters() {
		$container.each( function( i ) {
			const $this = $(this);
			const _from = parseInt($this.data( 'from' ), 10);
			const _to   = parseInt($this.data( 'to' ), 10);

			_counter[i]     = new CountUp( this, 0, options );
			_counterFrom[i] = _from;
			_counterTo[i]   = _to;
		});
	}

	function setOffsets() {
		$container.each( function( i ) {
			const $this = $(this);

			_offsetTop[i]    = parseInt($this.offset().top - ( $window.height() / 2 ), 10);
			_offsetTop[i]    = ( _offsetTop[i] < 0 ) ? 0 : _offsetTop[i];
			_offsetBottom[i] = parseInt(_offsetTop[i] + ( $window.height() / 2 ), 10);
		});
	}

	function setScrollAnimation() {
		$container.each( function( i ) {
			const $this = $(this);
			const _isInViewport = _scroll >= _offsetTop[i] && _scroll <= _offsetBottom[i];
			let _currentValue   = 0;

			$this.toggleClass( className.Active, _isInViewport );
			$this.parent().toggleClass( className.Active, _isInViewport );

			if ( $this.hasClass( className.Active ) ) {
				_currentValue = _counterTo[i];
			} else {
				_currentValue = _counterFrom[i];
			}
			
			if ( _currentValue != _lastValue[i] ) {
				_counter[i].update( _currentValue );
			}

			_lastValue[i] = _currentValue;
		});
	}
}
