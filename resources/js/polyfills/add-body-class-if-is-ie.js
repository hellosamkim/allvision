import { isIe, isEdge } from '../utils/is-ms';
import { $body } from '../utils/globals';
import className from '../utils/constant-names';

if ( isIe() ) {
	$body.addClass( className.IsIE );
}

if ( isEdge() ) {
	$body.addClass( className.isEdge );
}
