<?php

namespace rklandesverband\ews\API\Message;

/**
 * Class representing ServiceConfigurationResponseMessageType
 *
 *
 * XSD Type: ServiceConfigurationResponseMessageType
 *
 * @method \rklandesverband\ews\API\Type\MailTipsServiceConfigurationType getMailTipsConfiguration()
 * @method ServiceConfigurationResponseMessageType setMailTipsConfiguration(\rklandesverband\ews\API\Type\MailTipsServiceConfigurationType $mailTipsConfiguration)
 * @method \rklandesverband\ews\API\Type\UnifiedMessageServiceConfigurationType getUnifiedMessagingConfiguration()
 * @method ServiceConfigurationResponseMessageType setUnifiedMessagingConfiguration(\rklandesverband\ews\API\Type\UnifiedMessageServiceConfigurationType $unifiedMessagingConfiguration)
 * @method \rklandesverband\ews\API\Type\ProtectionRulesServiceConfigurationType getProtectionRulesConfiguration()
 * @method ServiceConfigurationResponseMessageType setProtectionRulesConfiguration(\rklandesverband\ews\API\Type\ProtectionRulesServiceConfigurationType $protectionRulesConfiguration)
 */
class ServiceConfigurationResponseMessageType extends ResponseMessageType
{

    /**
     * @var \rklandesverband\ews\API\Type\MailTipsServiceConfigurationType
     */
    protected $mailTipsConfiguration = null;

    /**
     * @var \rklandesverband\ews\API\Type\UnifiedMessageServiceConfigurationType
     */
    protected $unifiedMessagingConfiguration = null;

    /**
     * @var \rklandesverband\ews\API\Type\ProtectionRulesServiceConfigurationType
     */
    protected $protectionRulesConfiguration = null;
}
