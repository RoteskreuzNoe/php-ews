<?php

namespace rklandesverband\ews\API\Message;

/**
 * Class representing SetUserOofSettingsRequestType
 *
 *
 * XSD Type: SetUserOofSettingsRequest
 *
 * @method \rklandesverband\ews\API\Type\EmailAddressType getMailbox()
 * @method SetUserOofSettingsRequestType setMailbox(\rklandesverband\ews\API\Type\EmailAddressType $mailbox)
 * @method \rklandesverband\ews\API\Type\UserOofSettings getUserOofSettings()
 * @method SetUserOofSettingsRequestType setUserOofSettings(\rklandesverband\ews\API\Type\UserOofSettings $userOofSettings)
 */
class SetUserOofSettingsRequestType extends BaseRequestType
{

    /**
     * @var \rklandesverband\ews\API\Type\EmailAddressType
     */
    protected $mailbox = null;

    /**
     * @var \rklandesverband\ews\API\Type\UserOofSettings
     */
    protected $userOofSettings = null;
}
