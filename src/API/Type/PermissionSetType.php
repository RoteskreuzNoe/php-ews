<?php

namespace rklandesverband\ews\API\Type;

use rklandesverband\ews\API\Type;

/**
 * Class representing PermissionSetType
 *
 * The set of permissions on a folder
 * XSD Type: PermissionSetType
 *
 * @method PermissionSetType addPermissions(PermissionType $permissions)
 * @method PermissionType[] getPermissions()
 * @method PermissionSetType setPermissions(array $permissions)
 * @method PermissionSetType addUnknownEntries(string $unknownEntries)
 * @method string[] getUnknownEntries()
 * @method PermissionSetType setUnknownEntries(array $unknownEntries)
 */
class PermissionSetType extends Type
{

    /**
     * @var \rklandesverband\ews\API\Type\PermissionType[]
     */
    protected $permissions = null;

    /**
     * @var string[]
     */
    protected $unknownEntries = null;
}
