import { $body } from '../utils/globals';
import className from '../utils/constant-names';

$body.toggleClass( className.IsTouch, 'ontouchstart' in window );
