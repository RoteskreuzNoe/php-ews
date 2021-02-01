<?php

namespace rklandesverband\ews\API\Message;

/**
 * Class representing BaseDelegateType
 *
 *
 * XSD Type: BaseDelegateType
 *
 * @method \rklandesverband\ews\API\Type\EmailAddressType getMailbox()
 * @method BaseDelegateType setMailbox(\rklandesverband\ews\API\Type\EmailAddressType $mailbox)
 */
class BaseDelegateType extends BaseRequestType
{

    /**
     * @var \rklandesverband\ews\API\Type\EmailAddressType
     */
    protected $mailbox = null;
}
