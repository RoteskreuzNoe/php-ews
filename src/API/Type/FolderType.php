<?php

namespace rklandesverband\ews\API\Type;

/**
 * Class representing FolderType
 *
 *
 * XSD Type: FolderType
 *
 * @method PermissionSetType getPermissionSet()
 * @method FolderType setPermissionSet(PermissionSetType $permissionSet)
 * @method integer getUnreadCount()
 * @method FolderType setUnreadCount(integer $unreadCount)
 */
class FolderType extends BaseFolderType
{

    /**
     * @var \rklandesverband\ews\API\Type\PermissionSetType
     */
    protected $permissionSet = null;

    /**
     * @var integer
     */
    protected $unreadCount = null;
}
