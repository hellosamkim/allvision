import { $body } from '../utils/globals';
import className from '../utils/constant-names';

const iDevices = [
	'iPad Simulator',
	'iPhone Simulator',
	'iPod Simulator',
	'iPad',
	'iPhone',
	'iPod',
	'MacIntel'
];

if ( !!navigator.platform ) {
	while ( iDevices.length ) {
		if ( navigator.platform === iDevices.pop() ){
			$body.addClass( className.IsIos );
		}
	}
}
