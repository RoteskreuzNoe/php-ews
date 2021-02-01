<?php

namespace rklandesverband\ews\API\Message;

/**
 * Class representing GetMailTipsType
 *
 *
 * XSD Type: GetMailTipsType
 *
 * @method \rklandesverband\ews\API\Type\EmailAddressType getSendingAs()
 * @method GetMailTipsType setSendingAs(\rklandesverband\ews\API\Type\EmailAddressType $sendingAs)
 * @method GetMailTipsType addRecipients(\rklandesverband\ews\API\Type\EmailAddressType $recipients)
 * @method \rklandesverband\ews\API\Type\EmailAddressType[] getRecipients()
 * @method GetMailTipsType setRecipients(array $recipients)
 * @method GetMailTipsType addMailTipsRequested(string $mailTipsRequested)
 * @method string[] getMailTipsRequested()
 * @method GetMailTipsType setMailTipsRequested(array $mailTipsRequested)
 */
class GetMailTipsType extends BaseRequestType
{

    /**
     * @var \rklandesverband\ews\API\Type\EmailAddressType
     */
    protected $sendingAs = null;

    /**
     * @var \rklandesverband\ews\API\Type\EmailAddressType[]
     */
    protected $recipients = null;

    /**
     * @var string[]
     */
    protected $mailTipsRequested = null;
}
