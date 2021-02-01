<?php

namespace rklandesverband\ews\API\Message;

/**
 * Class representing GetInboxRulesResponseType
 *
 *
 * XSD Type: GetInboxRulesResponseType
 *
 * @method boolean isOutlookRuleBlobExists()
 * @method boolean getOutlookRuleBlobExists()
 * @method GetInboxRulesResponseType setOutlookRuleBlobExists(boolean $outlookRuleBlobExists)
 * @method GetInboxRulesResponseType addInboxRules(\rklandesverband\ews\API\Type\RuleType $inboxRules)
 * @method \rklandesverband\ews\API\Type\RuleType[] getInboxRules()
 * @method GetInboxRulesResponseType setInboxRules(array $inboxRules)
 */
class GetInboxRulesResponseType extends ResponseMessageType
{

    /**
     * @var boolean
     */
    protected $outlookRuleBlobExists = null;

    /**
     * @var \rklandesverband\ews\API\Type\RuleType[]
     */
    protected $inboxRules = null;
}
