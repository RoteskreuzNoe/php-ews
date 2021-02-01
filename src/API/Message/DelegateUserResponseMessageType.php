<?php

namespace rklandesverband\ews\API\Message;

/**
 * Class representing DelegateUserResponseMessageType
 *
 *
 * XSD Type: DelegateUserResponseMessageType
 *
 * @method \rklandesverband\ews\API\Type\DelegateUserType getDelegateUser()
 * @method DelegateUserResponseMessageType setDelegateUser(\rklandesverband\ews\API\Type\DelegateUserType $delegateUser)
 */
class DelegateUserResponseMessageType extends ResponseMessageType
{

    /**
     * @var \rklandesverband\ews\API\Type\DelegateUserType
     */
    protected $delegateUser = null;
}
