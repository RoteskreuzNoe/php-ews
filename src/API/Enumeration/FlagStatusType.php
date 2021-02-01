<?php
/**
 * Contains \rklandesverband\ews\API\Enumeration\FlagStatusType.
 */


namespace rklandesverband\ews\API\Enumeration;

use rklandesverband\ews\API\Enumeration;

/**
 * Class representing FlagStatusType
 *
 *
 * XSD Type: FlagStatusType
 */
class FlagStatusType extends Enumeration
{

    const COMPLETE = 'Complete';

    const FLAGGED = 'Flagged';

    const NOT_FLAGGED = 'NotFlagged';
}
