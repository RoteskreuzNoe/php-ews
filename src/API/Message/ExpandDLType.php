<?php

namespace rklandesverband\ews\API\Message;

/**
 * Class representing ExpandDLType
 *
 *
 * XSD Type: ExpandDLType
 *
 * @method \rklandesverband\ews\API\Type\EmailAddressType getMailbox()
 * @method ExpandDLType setMailbox(\rklandesverband\ews\API\Type\EmailAddressType $mailbox)
 */
class ExpandDLType extends BaseRequestType
{

    /**
     * @var \rklandesverband\ews\API\Type\EmailAddressType
     */
    protected $mailbox = null;
}
