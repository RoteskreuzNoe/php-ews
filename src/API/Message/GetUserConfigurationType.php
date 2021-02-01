<?php

namespace rklandesverband\ews\API\Message;

/**
 * Class representing GetUserConfigurationType
 *
 *
 * XSD Type: GetUserConfigurationType
 *
 * @method \rklandesverband\ews\API\Type\UserConfigurationNameType getUserConfigurationName()
 * @method GetUserConfigurationType setUserConfigurationName(\rklandesverband\ews\API\Type\UserConfigurationNameType $userConfigurationName)
 * @method GetUserConfigurationType addUserConfigurationProperties(string $userConfigurationProperties)
 * @method string[] getUserConfigurationProperties()
 * @method GetUserConfigurationType setUserConfigurationProperties(array $userConfigurationProperties)
 */
class GetUserConfigurationType extends BaseRequestType
{

    /**
     * @var \rklandesverband\ews\API\Type\UserConfigurationNameType
     */
    protected $userConfigurationName = null;

    /**
     * @var string[]
     */
    protected $userConfigurationProperties = null;
}
