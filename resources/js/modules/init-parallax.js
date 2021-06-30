import { $window } from '../utils/globals';

const initParallax = (_class = '[data-parallax="true"]') => {
	const $container = $(_class);

	if ( !$container.length ) {
		return false;
	}

	const _move = 200;

	let _arrListTopOffset    = [];
	let _arrListBottomOffset = [];
	let _WinScroll           = 0;

	$window.scroll(function(event) {
		_WinScroll = $window.scrollTop();

		Parallax();
	});

	$window.on('load resize orientationchange',function() {
		Offsets();
	})

	function Offsets() {
		$container.each(function(i) {
			const $this   = $(this);
			const _top    = parseInt($this.offset().top - $window.height(), 10);
			const _bottom = parseInt(_top + $this.innerHeight() + $window.height(), 10);

			_arrListTopOffset[i]    = (_top < 0) ? 0 : _top;
			_arrListBottomOffset[i] = _bottom;
		});
	}

	function Parallax() {
		$container.each(function(i) {
			if(_WinScroll >= _arrListTopOffset[i] && _WinScroll <= _arrListBottomOffset[i]){

				const $this      = $(this);
				const _height    = _arrListBottomOffset[i] -  _arrListTopOffset[i];
				const _scroll    = _height - (_arrListBottomOffset[i] - _WinScroll);
				const _position  = ( $this.data('position') != undefined ) ? $this.data('position') : 'top';
				const _dimension = ( $this.data('move') != undefined ) ? $this.data('move') : _move;

				let _percentage = parseInt((_scroll / _height) * 100);
					_percentage = (_percentage >= 99) ? 100 : _percentage;

				if(typeof _percentage === 'number'){
					const _scrollParallax = parseInt((_percentage / 100) * _dimension, 10);

					if(_position == 'top') {
						$this.css({
							'-webkit-transform' : 'translateY(-' + _scrollParallax + 'px)',
							   '-moz-transform' : 'translateY(-' + _scrollParallax + 'px)',
							    '-ms-transform' : 'translateY(-' + _scrollParallax + 'px)',
									'transform' : 'translateY(-' + _scrollParallax + 'px)'
						});
					}

					if(_position == 'bottom') {
						$this.css({
							'-webkit-transform' : 'translateY(' + _scrollParallax + 'px)',
							   '-moz-transform' : 'translateY(' + _scrollParallax + 'px)',
							    '-ms-transform' : 'translateY(' + _scrollParallax + 'px)',
									'transform' : 'translateY(' + _scrollParallax + 'px)'
						});
					}

					if(_position == 'left') {
						$this.css({
							'-webkit-transform' : 'translateX(-' + _scrollParallax + 'px)',
							   '-moz-transform' : 'translateX(-' + _scrollParallax + 'px)',
							    '-ms-transform' : 'translateX(-' + _scrollParallax + 'px)',
									'transform' : 'translateX(-' + _scrollParallax + 'px)'
						});
					}

					if(_position == 'right') {
						$this.css({
							'-webkit-transform' : 'translateX(' + _scrollParallax + 'px)',
							   '-moz-transform' : 'translateX(' + _scrollParallax + 'px)',
							    '-ms-transform' : 'translateX(' + _scrollParallax + 'px)',
									'transform' : 'translateX(' + _scrollParallax + 'px)'
						});
					}

					if(_position == 'opacity') {
						$this.css({
							opacity: ((_percentage * 2) / 100),
						});
					}
				}
			}
		});
	}
}

export default initParallax;
