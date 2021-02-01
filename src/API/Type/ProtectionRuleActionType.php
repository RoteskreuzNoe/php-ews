<?php

namespace rklandesverband\ews\API\Type;

use rklandesverband\ews\API\Type;

/**
 * Class representing ProtectionRuleActionType
 *
 *
 * XSD Type: ProtectionRuleActionType
 *
 * @method string getName()
 * @method ProtectionRuleActionType setName(string $name)
 * @method ProtectionRuleActionType addArgument(ProtectionRuleArgumentType $argument)
 * @method ProtectionRuleArgumentType[] getArgument()
 * @method ProtectionRuleActionType setArgument(array $argument)
 */
class ProtectionRuleActionType extends Type
{

    /**
     * @var string
     */
    protected $name = null;

    /**
     * @var \rklandesverband\ews\API\Type\ProtectionRuleArgumentType[]
     */
    protected $argument = null;
}
