<?php

namespace rklandesverband\ews\API\Type;

use rklandesverband\ews\API\Type;

/**
 * Class representing ArrayOfRuleOperationsType
 *
 * Represents an array of rule operations to be performed
 * XSD Type: ArrayOfRuleOperationsType
 *
 * @method ArrayOfRuleOperationsType addCreateRuleOperation(CreateRuleOperationType $createRuleOperation)
 * @method CreateRuleOperationType[] getCreateRuleOperation()
 * @method ArrayOfRuleOperationsType setCreateRuleOperation(array $createRuleOperation)
 * @method ArrayOfRuleOperationsType addSetRuleOperation(SetRuleOperationType $setRuleOperation)
 * @method SetRuleOperationType[] getSetRuleOperation()
 * @method ArrayOfRuleOperationsType setSetRuleOperation(array $setRuleOperation)
 * @method ArrayOfRuleOperationsType addDeleteRuleOperation(DeleteRuleOperationType $deleteRuleOperation)
 * @method DeleteRuleOperationType[] getDeleteRuleOperation()
 * @method ArrayOfRuleOperationsType setDeleteRuleOperation(array $deleteRuleOperation)
 */
class ArrayOfRuleOperationsType extends Type
{

    /**
     * @var \rklandesverband\ews\API\Type\CreateRuleOperationType[]
     */
    protected $createRuleOperation = null;

    /**
     * @var \rklandesverband\ews\API\Type\SetRuleOperationType[]
     */
    protected $setRuleOperation = null;

    /**
     * @var \rklandesverband\ews\API\Type\DeleteRuleOperationType[]
     */
    protected $deleteRuleOperation = null;
}
