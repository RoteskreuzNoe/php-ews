<?php

namespace rklandesverband\ews\API\Message;

/**
 * Class representing PlayOnPhoneResponseMessageType
 *
 *
 * XSD Type: PlayOnPhoneResponseMessageType
 *
 * @method \rklandesverband\ews\API\Type\PhoneCallIdType getPhoneCallId()
 * @method PlayOnPhoneResponseMessageType setPhoneCallId(\rklandesverband\ews\API\Type\PhoneCallIdType $phoneCallId)
 */
class PlayOnPhoneResponseMessageType extends ResponseMessageType
{

    /**
     * @var \rklandesverband\ews\API\Type\PhoneCallIdType
     */
    protected $phoneCallId = null;
}
