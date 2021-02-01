<?php

namespace rklandesverband\ews\API\Type;

use rklandesverband\ews\API\Type;

/**
 * Class representing ResolutionType
 *
 *
 * XSD Type: ResolutionType
 *
 * @method EmailAddressType getMailbox()
 * @method ResolutionType setMailbox(EmailAddressType $mailbox)
 * @method ContactItemType getContact()
 * @method ResolutionType setContact(ContactItemType $contact)
 */
class ResolutionType extends Type
{

    /**
     * @var \rklandesverband\ews\API\Type\EmailAddressType
     */
    protected $mailbox = null;

    /**
     * @var \rklandesverband\ews\API\Type\ContactItemType
     */
    protected $contact = null;
}
