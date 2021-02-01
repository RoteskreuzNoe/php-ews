<?php

namespace rklandesverband\ews\API\Message;

/**
 * Class representing GetUserConfigurationResponseMessageType
 *
 *
 * XSD Type: GetUserConfigurationResponseMessageType
 *
 * @method \rklandesverband\ews\API\Type\UserConfigurationType getUserConfiguration()
 * @method GetUserConfigurationResponseMessageType setUserConfiguration(\rklandesverband\ews\API\Type\UserConfigurationType $userConfiguration)
 */
class GetUserConfigurationResponseMessageType extends ResponseMessageType
{

    /**
     * @var \rklandesverband\ews\API\Type\UserConfigurationType
     */
    protected $userConfiguration = null;
}
