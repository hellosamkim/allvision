import 'magnific-popup';
import { $window, $body } from '../utils/globals';
import className from '../utils/constant-names';

const _element   = '.js-section-map';
const $container = $(_element);

if ( $container.length ) {

	const $map          = $container.find( '.js__map' );
	const _id           = 'js-section-map';
	const _zoom         = parseInt( $map.data( 'zoom' ) );
	const _style        = [{"featureType":"water","elementType":"geometry","stylers":[{"color":"#ededed"},{"lightness":17}]},{"featureType":"landscape","elementType":"geometry","stylers":[{"color":"#f5f5f5"},{"lightness":20}]},{"featureType":"road.highway","elementType":"geometry.fill","stylers":[{"color":"#ffffff"},{"lightness":17}]},{"featureType":"road.highway","elementType":"geometry.stroke","stylers":[{"color":"#ffffff"},{"lightness":29},{"weight":0.2}]},{"featureType":"road.arterial","elementType":"geometry","stylers":[{"color":"#ffffff"},{"lightness":18}]},{"featureType":"road.local","elementType":"geometry","stylers":[{"color":"#ffffff"},{"lightness":16}]},{"featureType":"poi","elementType":"geometry","stylers":[{"color":"#f5f5f5"},{"lightness":21}]},{"featureType":"poi.park","elementType":"geometry","stylers":[{"color":"#dedede"},{"lightness":21}]},{"elementType":"labels.text.stroke","stylers":[{"visibility":"on"},{"color":"#ffffff"},{"lightness":16}]},{"elementType":"labels.text.fill","stylers":[{"saturation":36},{"color":"#333333"},{"lightness":40}]},{"elementType":"labels.icon","stylers":[{"visibility":"off"}]},{"featureType":"transit","elementType":"geometry","stylers":[{"color":"#f2f2f2"},{"lightness":19}]},{"featureType":"administrative","elementType":"geometry.fill","stylers":[{"color":"#fefefe"},{"lightness":20}]},{"featureType":"administrative","elementType":"geometry.stroke","stylers":[{"color":"#fefefe"},{"lightness":17},{"weight":1.2}]}];
	
	let map, myOptions;
	let marker             = [];
	let linkPopup          = [];
	let directionsService  = new google.maps.DirectionsService();
	let directionsRenderer = new google.maps.DirectionsRenderer();

	let iconDefault = {
		path: "M9.66,28.13C1.51,16.32,0,15.11,0,10.77a10.77,10.77,0,1,1,21.53,0c0,4.34-1.51,5.55-9.66,17.36a1.35,1.35,0,0,1-1.87.34,1.37,1.37,0,0,1-.34-.34Zm1.11-12.88a4.49,4.49,0,1,0-4.49-4.48,4.49,4.49,0,0,0,4.49,4.48Z",
		fillColor: '#0a84ff',
		fillOpacity: 1,
		anchor: new google.maps.Point(0,0),
		strokeWeight: 0,
		scale: 1,
		zIndex: 90
	};

	let iconHover = {
		path: "M9.66,28.13C1.51,16.32,0,15.11,0,10.77a10.77,10.77,0,1,1,21.53,0c0,4.34-1.51,5.55-9.66,17.36a1.35,1.35,0,0,1-1.87.34,1.37,1.37,0,0,1-.34-.34Zm1.11-12.88a4.49,4.49,0,1,0-4.49-4.48,4.49,4.49,0,0,0,4.49,4.48Z",
		fillColor: '#0074e8',
		fillOpacity: 1,
		anchor: new google.maps.Point(3,8),
		strokeWeight: 0,
		scale: 1.4,
		zIndex: 90
	};

	setGoogleMap();
	setMarkers();
	filterAccordion();
	filterCheckboxes();
	setPrevNextText();
	setPrevNextBtn();
	setExpandOnMobile();

	function setGoogleMap(argument) {
		myOptions = {
			zoom: _zoom,
			mapTypeId: google.maps.MapTypeId.ROADMAP,
			sensor: 'true',
			panControl: false,
			zoomControl: true,
			mapTypeControl: false,
			scaleControl: false,
			streetViewControl: false,
			overviewMapControl: false,
			styles: _style
		};

		map = new google.maps.Map(document.getElementById(_id), myOptions);		
	}

	function setExpandOnMobile() {
		$container.find( '.js__expand' ).on( 'click', function( event ) {
			event.preventDefault();

			const $this   = $(this);
			const $parent = $this.parent();

			$parent.toggleClass( className.Active ).siblings().removeClass( className.Active );
		});
	}

	function setMarkers() {
		let bounds = new google.maps.LatLngBounds();

		$container.find( '.js__location' ).each( function( i ) {
			const $this       = $(this);
			const $input      = $this.prev();
			const _arrAddress = $this.data('location').split('&&');
			const _arrLinks   = $this.data('link').split('&&');
			const _visible    = ( $input.is( ':checked' ) ) ? true : false;

			linkPopup[i] = [];
			marker[i]    = [];

			if ( _visible ) {
				$.each(_arrAddress, function(j, _address) {
					const _arrLocation = _address.split(',');
					
					linkPopup[i][j] = _arrLinks[j];

					marker[i][j] = new google.maps.Marker({
				  		position: new google.maps.LatLng(_arrLocation[0], _arrLocation[1]),
						map: map,
						icon: iconDefault
					});		
	
					bounds.extend(marker[i][j].getPosition());
					map.fitBounds(bounds);
	
					marker[i][j].addListener('click', function() {
						$.magnificPopup.open({
							type: 'ajax',
							items: {
								src: _arrLinks[j]
							},
							removalDelay: 100,
							mainClass: 'mfp-fade',
							cursor: 'mfp-ajax-cur',
							tError: '<a href="%url%">The content</a> could not be loaded.',
							closeMarkup: '<button title="%title%" type="button" class="mfp-close">&#215;</button>',
							callbacks: {
								parseAjax: function( mfpResponse ) {
									mfpResponse.data = $(mfpResponse.data).find('.js-main');
								}
							}			
						}, 0);					
					});				
	
					marker[i][j].addListener('mouseover', function() {
						marker[i][j].setIcon(iconHover);
						marker[i][j].setZIndex(100);
					});

					marker[i][j].addListener('mouseout', function() {
						marker[i][j].setIcon(iconDefault);
						marker[i][j].setZIndex(100);
					});
				});
			}
		});
	}

	function clearMarkers() {
		$container.find( '.js__location' ).each( function( i ) {
			const _allLocations = $(this).data( 'location' ).split( '&&' );
			
			$.each( _allLocations, function(j, _location ) {
				if ( marker[i][j] != undefined ) {
					marker[i][j].setMap(null);
				}
			});
		});

		marker = [];
	}

	function setPrevNextText() {
		const $active   = $container.find( '.js__locations.' + className.Active );
		const $prev     = ( $active.prev().length ) ? $active.prev() : $container.find( '.js__locations:last-child' );
		const $next     = ( $active.next().length ) ? $active.next() : $container.find( '.js__locations:first-child' );
		const _prevText = $prev.data( 'text' );
		const _nextText = $next.data( 'text' );
		const $prevBtn  = $container.find( '.js__prev' );
		const $nextBtn  = $container.find( '.js__next' );

		$prevBtn.attr( 'data-text', _prevText );
		$nextBtn.attr( 'data-text', _nextText );
	}

	function filterAccordion() {
		$container.find( '.js__link' ).on( 'click', function( event ) {
			event.preventDefault();

			const $this   = $(this);
			const $parent = $this.parent();

			$parent.addClass( className.Active ).siblings().removeClass( className.Active );
			$parent.find( 'input' ).prop( 'checked', true );
			$parent.siblings().find( 'input' ).prop( 'checked', false );

			clearMarkers();
			setMarkers();
			setPrevNextText();
		});
	}

	function filterCheckboxes() {
		$container.find( 'input' ).on( 'change', function() {
			const $this      = $(this);
			const _isChecked = $this.prop( 'checked' );

			clearMarkers();
			setMarkers();
		});
	}

	function setPrevNextBtn() {
		$container.find( '.js__prev' ).on( 'click', function( event ) {
			event.preventDefault();

			const $active = $container.find( '.js__locations.' + className.Active );
			const $prev   = ( $active.prev().length ) ? $active.prev() : $container.find( '.js__locations:last-child' );
			const $link   = $prev.find( '.js__link' );

			$link.trigger( 'click' );
		});

		$container.find( '.js__next' ).on( 'click', function( event ) {
			event.preventDefault();

			const $active = $container.find( '.js__locations.' + className.Active );
			const $next   = ( $active.next().length ) ? $active.next() : $container.find( '.js__locations:first-child' );
			const $link   = $next.find( '.js__link' );

			$link.trigger( 'click' );
		});
	}	
}
