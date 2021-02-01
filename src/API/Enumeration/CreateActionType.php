<?php
/**
 * Contains \rklandesverband\ews\API\Enumeration\CreateActionType.
 */


namespace rklandesverband\ews\API\Enumeration;

use rklandesverband\ews\API\Enumeration;

/**
 * Class representing CreateActionType
 *
 *
 * XSD Type: CreateActionType
 */
class CreateActionType extends Enumeration
{

    const CREATE = 'CreateNew';

    const UPDATE = 'Update';

    const UPDATE_OR_CREATE = 'UpdateOrCreate';

    const CREATE_NEW = 'CreateNew';
}
