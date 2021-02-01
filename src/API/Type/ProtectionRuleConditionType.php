<?php

namespace rklandesverband\ews\API\Type;

use rklandesverband\ews\API\Type;

/**
 * Class representing ProtectionRuleConditionType
 *
 *
 * XSD Type: ProtectionRuleConditionType
 *
 * @method string getAllInternal()
 * @method ProtectionRuleConditionType setAllInternal(string $allInternal)
 * @method ProtectionRuleAndType getAnd()
 * @method ProtectionRuleConditionType setAnd(ProtectionRuleAndType $and)
 * @method ProtectionRuleConditionType addRecipientIs(string $recipientIs)
 * @method string[] getRecipientIs()
 * @method ProtectionRuleConditionType setRecipientIs(array $recipientIs)
 * @method ProtectionRuleConditionType addSenderDepartments(string $senderDepartments)
 * @method string[] getSenderDepartments()
 * @method ProtectionRuleConditionType setSenderDepartments(array $senderDepartments)
 * @method string getTrue()
 * @method ProtectionRuleConditionType setTrue(string $true)
 */
class ProtectionRuleConditionType extends Type
{

    /**
     * @var string
     */
    protected $allInternal = null;

    /**
     * @var \rklandesverband\ews\API\Type\ProtectionRuleAndType
     */
    protected $and = null;

    /**
     * @var string[]
     */
    protected $recipientIs = null;

    /**
     * @var string[]
     */
    protected $senderDepartments = null;

    /**
     * @var string
     */
    protected $true = null;
}
