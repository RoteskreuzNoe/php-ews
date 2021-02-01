<?php

namespace rklandesverband\ews\API\Type;

use rklandesverband\ews\API\Type;

/**
 * Class representing SingleRecipientType
 *
 *
 * XSD Type: SingleRecipientType
 *
 * @method EmailAddressType getMailbox()
 * @method SingleRecipientType setMailbox(EmailAddressType $mailbox)
 */
class SingleRecipientType extends Type
{

    /**
     * @var \rklandesverband\ews\API\Type\EmailAddressType
     */
    protected $mailbox = null;

    /**
     * SingleRecipientType constructor.
     * @param EmailAddressType|null $mailbox
     */
    public function __construct($mailbox = null)
    {
        $this->mailbox = $mailbox;
    }
}
