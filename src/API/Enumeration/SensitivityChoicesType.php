<?php
/**
 * Contains \rklandesverband\ews\API\Enumeration\SensitivityChoicesType.
 */


namespace rklandesverband\ews\API\Enumeration;

use rklandesverband\ews\API\Enumeration;

/**
 * Class representing SensitivityChoicesType
 *
 *
 * XSD Type: SensitivityChoicesType
 */
class SensitivityChoicesType extends Enumeration
{

    const CONFIDENTIAL = 'Confidential';

    const NORMAL = 'Normal';

    const PERSONAL = 'Personal';

    const PRIVATE_ITEM = 'Private';

    const PRIVATE_CONSTANT = 'Private';
}
