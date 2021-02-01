<?php

namespace rklandesverband\ews\API\Message;

/**
 * Class representing DisconnectPhoneCallType
 *
 *
 * XSD Type: DisconnectPhoneCallType
 *
 * @method \rklandesverband\ews\API\Type\PhoneCallIdType getPhoneCallId()
 * @method DisconnectPhoneCallType setPhoneCallId(\rklandesverband\ews\API\Type\PhoneCallIdType $phoneCallId)
 */
class DisconnectPhoneCallType extends BaseRequestType
{

    /**
     * @var \rklandesverband\ews\API\Type\PhoneCallIdType
     */
    protected $phoneCallId = null;
}
