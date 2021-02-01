<?php
/**
 * Contains \rklandesverband\ews\API\Enumeration\ResponseClassType.
 */


namespace rklandesverband\ews\API\Enumeration;

use rklandesverband\ews\API\Enumeration;

/**
 * Class representing ResponseClassType
 *
 *
 * XSD Type: ResponseClassType
 */
class ResponseClassType extends Enumeration
{

    const ERROR = 'Error';

    const SUCCESS = 'Success';

    const WARNING = 'Warning';
}
