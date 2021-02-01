<?php

namespace rklandesverband\ews\API\Message;

/**
 * Class representing UpdateDelegateType
 *
 *
 * XSD Type: UpdateDelegateType
 *
 * @method UpdateDelegateType addDelegateUsers(\rklandesverband\ews\API\Type\DelegateUserType $delegateUsers)
 * @method \rklandesverband\ews\API\Type\DelegateUserType[] getDelegateUsers()
 * @method UpdateDelegateType setDelegateUsers(array $delegateUsers)
 * @method string getDeliverMeetingRequests()
 * @method UpdateDelegateType setDeliverMeetingRequests(string $deliverMeetingRequests)
 */
class UpdateDelegateType extends BaseDelegateType
{

    /**
     * @var \rklandesverband\ews\API\Type\DelegateUserType[]
     */
    protected $delegateUsers = null;

    /**
     * @var string
     */
    protected $deliverMeetingRequests = null;
}
