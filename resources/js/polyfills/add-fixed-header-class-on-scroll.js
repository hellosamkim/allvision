import { $window, $body } from '../utils/globals';
import className from '../utils/constant-names';

$window.on( 'scroll', () => $body.toggleClass(className.ShowFixedHeader, $window.scrollTop() > 10) );
