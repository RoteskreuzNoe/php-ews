<?php

namespace rklandesverband\ews\API\Message;

/**
 * Class representing GetServiceConfigurationType
 *
 *
 * XSD Type: GetServiceConfigurationType
 *
 * @method \rklandesverband\ews\API\Type\EmailAddressType getActingAs()
 * @method GetServiceConfigurationType setActingAs(\rklandesverband\ews\API\Type\EmailAddressType $actingAs)
 * @method GetServiceConfigurationType addRequestedConfiguration(\rklandesverband\ews\API\Enumeration\ServiceConfigurationType $requestedConfiguration)
 * @method \rklandesverband\ews\API\Enumeration\ServiceConfigurationType[] getRequestedConfiguration()
 * @method GetServiceConfigurationType setRequestedConfiguration(array $requestedConfiguration)
 */
class GetServiceConfigurationType extends BaseRequestType
{

    /**
     * @var \rklandesverband\ews\API\Type\EmailAddressType
     */
    protected $actingAs = null;

    /**
     * @var \rklandesverband\ews\API\Enumeration\ServiceConfigurationType[]
     */
    protected $requestedConfiguration = null;
}
