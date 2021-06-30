import { $body } from '../utils/globals';
import className from '../utils/constant-names';

$( '.js-btn-menu' ).on('click', event => {
	event.preventDefault();

	$body.toggleClass(className.ShowNavMain);
});
