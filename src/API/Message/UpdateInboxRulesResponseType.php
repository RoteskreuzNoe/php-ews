<?php

namespace rklandesverband\ews\API\Message;

/**
 * Class representing UpdateInboxRulesResponseType
 *
 *
 * XSD Type: UpdateInboxRulesResponseType
 *
 * @method UpdateInboxRulesResponseType addRuleOperationErrors(\rklandesverband\ews\API\Type\RuleOperationErrorType $ruleOperationErrors)
 * @method \rklandesverband\ews\API\Type\RuleOperationErrorType[] getRuleOperationErrors()
 * @method UpdateInboxRulesResponseType setRuleOperationErrors(array $ruleOperationErrors)
 */
class UpdateInboxRulesResponseType extends ResponseMessageType
{

    /**
     * @var \rklandesverband\ews\API\Type\RuleOperationErrorType[]
     */
    protected $ruleOperationErrors = null;
}
