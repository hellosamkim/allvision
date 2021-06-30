/*
	Usage: calc(var(--vh, 1vh) * 100)
*/

import { $window } from '../utils/globals';

setVH();

$window.on( 'resize orientationchange', function() {
	setVH();
});

function setVH() {
	const vh = window.innerHeight * 0.01;

	document.documentElement.style.setProperty('--vh', `${vh}px`);
}
