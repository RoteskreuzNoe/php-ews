<?php
/**
 * Contains \rklandesverband\ews\API\Enumeration\ContactSourceType.
 */


namespace rklandesverband\ews\API\Enumeration;

use rklandesverband\ews\API\Enumeration;

/**
 * Class representing ContactSourceType
 *
 *
 * XSD Type: ContactSourceType
 */
class ContactSourceType extends Enumeration
{

    const ACTIVE_DIRECTORY = 'ActiveDirectory';

    const EXCHANGE_STORE = 'Store';

    const STORE = 'Store';
}
