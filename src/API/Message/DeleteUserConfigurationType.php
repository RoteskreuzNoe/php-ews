<?php

namespace rklandesverband\ews\API\Message;

/**
 * Class representing DeleteUserConfigurationType
 *
 *
 * XSD Type: DeleteUserConfigurationType
 *
 * @method \rklandesverband\ews\API\Type\UserConfigurationNameType getUserConfigurationName()
 * @method DeleteUserConfigurationType setUserConfigurationName(\rklandesverband\ews\API\Type\UserConfigurationNameType $userConfigurationName)
 */
class DeleteUserConfigurationType extends BaseRequestType
{

    /**
     * @var \rklandesverband\ews\API\Type\UserConfigurationNameType
     */
    protected $userConfigurationName = null;
}
