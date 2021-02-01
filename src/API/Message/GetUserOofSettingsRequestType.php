<?php

namespace rklandesverband\ews\API\Message;

/**
 * Class representing GetUserOofSettingsRequestType
 *
 *
 * XSD Type: GetUserOofSettingsRequest
 *
 * @method \rklandesverband\ews\API\Type\EmailAddressType getMailbox()
 * @method GetUserOofSettingsRequestType setMailbox(\rklandesverband\ews\API\Type\EmailAddressType $mailbox)
 */
class GetUserOofSettingsRequestType extends BaseRequestType
{

    /**
     * @var \rklandesverband\ews\API\Type\EmailAddressType
     */
    protected $mailbox = null;
}
