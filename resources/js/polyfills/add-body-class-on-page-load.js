import { $window, $body } from '../utils/globals';
import className from '../utils/constant-names';

$window.on( 'load', () => $body.addClass(className.PageLoaded) );
