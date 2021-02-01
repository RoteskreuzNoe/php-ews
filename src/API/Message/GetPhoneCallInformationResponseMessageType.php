<?php

namespace rklandesverband\ews\API\Message;

/**
 * Class representing GetPhoneCallInformationResponseMessageType
 *
 *
 * XSD Type: GetPhoneCallInformationResponseMessageType
 *
 * @method \rklandesverband\ews\API\Type\PhoneCallInformationType getPhoneCallInformation()
 * @method GetPhoneCallInformationResponseMessageType setPhoneCallInformation(\rklandesverband\ews\API\Type\PhoneCallInformationType $phoneCallInformation)
 */
class GetPhoneCallInformationResponseMessageType extends ResponseMessageType
{

    /**
     * @var \rklandesverband\ews\API\Type\PhoneCallInformationType
     */
    protected $phoneCallInformation = null;
}
