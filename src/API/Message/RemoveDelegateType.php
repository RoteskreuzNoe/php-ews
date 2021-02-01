<?php

namespace rklandesverband\ews\API\Message;

/**
 * Class representing RemoveDelegateType
 *
 *
 * XSD Type: RemoveDelegateType
 *
 * @method RemoveDelegateType addUserIds(\rklandesverband\ews\API\Type\UserIdType $userIds)
 * @method \rklandesverband\ews\API\Type\UserIdType[] getUserIds()
 * @method RemoveDelegateType setUserIds(array $userIds)
 */
class RemoveDelegateType extends BaseDelegateType
{

    /**
     * @var \rklandesverband\ews\API\Type\UserIdType[]
     */
    protected $userIds = null;
}
