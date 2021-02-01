<?php
/**
 * Contains \rklandesverband\ews\API\Enumeration\ServiceConfigurationType.
 */


namespace rklandesverband\ews\API\Enumeration;

use rklandesverband\ews\API\Enumeration;

/**
 * Class representing ServiceConfigurationType
 *
 *
 * XSD Type: ServiceConfigurationType
 */
class ServiceConfigurationType extends Enumeration
{

    const MAIL_TIPS = 'MailTips';

    const PROTECTION_RULES = 'ProtectionRules';

    const UNIFIED_MESSAGING_CONFIG = 'UnifiedMessagingConfiguration';
}
