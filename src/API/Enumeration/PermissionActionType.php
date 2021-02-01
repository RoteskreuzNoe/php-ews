<?php
/**
 * Contains \rklandesverband\ews\API\Enumeration\PermissionActionType.
 */


namespace rklandesverband\ews\API\Enumeration;

use rklandesverband\ews\API\Enumeration;

/**
 * Class representing PermissionActionType
 *
 *
 * XSD Type: PermissionActionType
 */
class PermissionActionType extends Enumeration
{

    const ALL = 'All';

    const NONE = 'None';

    const OWNED = 'Owned';
}
