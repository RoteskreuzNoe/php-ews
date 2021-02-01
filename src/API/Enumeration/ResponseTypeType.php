<?php
/**
 * Contains \rklandesverband\ews\API\Enumeration\ResponseTypeType.
 */


namespace rklandesverband\ews\API\Enumeration;

use rklandesverband\ews\API\Enumeration;

/**
 * Class representing ResponseTypeType
 *
 *
 * XSD Type: ResponseTypeType
 */
class ResponseTypeType extends Enumeration
{

    const ACCEPT = 'Accept';

    const DECLNE = 'Decline';

    const NONE = 'NoResponseReceived';

    const ORGANIZER = 'Organizer';

    const TENTATIVE = 'Tentative';

    const UNKNOWN = 'Unknown';

    const DECLINE = 'Decline';

    const NO_RESPONSE_RECEIVED = 'NoResponseReceived';
}
