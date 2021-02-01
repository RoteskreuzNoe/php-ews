<?php

namespace rklandesverband\ews\API\Message;

/**
 * Class representing GetDelegateType
 *
 *
 * XSD Type: GetDelegateType
 *
 * @method boolean isIncludePermissions()
 * @method boolean getIncludePermissions()
 * @method GetDelegateType setIncludePermissions(boolean $includePermissions)
 * @method GetDelegateType addUserIds(\rklandesverband\ews\API\Type\UserIdType $userIds)
 * @method \rklandesverband\ews\API\Type\UserIdType[] getUserIds()
 * @method GetDelegateType setUserIds(array $userIds)
 */
class GetDelegateType extends BaseDelegateType
{

    /**
     * @var boolean
     */
    protected $includePermissions = null;

    /**
     * @var \rklandesverband\ews\API\Type\UserIdType[]
     */
    protected $userIds = null;
}
