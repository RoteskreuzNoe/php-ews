<?php

namespace rklandesverband\ews\API\Type;

use rklandesverband\ews\API\Type;

/**
 * Class representing RuleOperationErrorType
 *
 *
 * XSD Type: RuleOperationErrorType
 *
 * @method integer getOperationIndex()
 * @method RuleOperationErrorType setOperationIndex(integer $operationIndex)
 * @method RuleOperationErrorType addValidationErrors(RuleValidationErrorType $validationErrors)
 * @method RuleValidationErrorType[] getValidationErrors()
 * @method RuleOperationErrorType setValidationErrors(array $validationErrors)
 */
class RuleOperationErrorType extends Type
{

    /**
     * @var integer
     */
    protected $operationIndex = null;

    /**
     * @var \rklandesverband\ews\API\Type\RuleValidationErrorType[]
     */
    protected $validationErrors = null;
}
