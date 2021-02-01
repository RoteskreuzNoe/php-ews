<?php

namespace rklandesverband\ews\API\Message;

/**
 * Class representing UpdateItemResponseMessageType
 *
 *
 * XSD Type: UpdateItemResponseMessageType
 *
 * @method \rklandesverband\ews\API\Type\ConflictResultsType getConflictResults()
 * @method UpdateItemResponseMessageType setConflictResults(\rklandesverband\ews\API\Type\ConflictResultsType $conflictResults)
 */
class UpdateItemResponseMessageType extends ItemInfoResponseMessageType
{

    /**
     * @var \rklandesverband\ews\API\Type\ConflictResultsType
     */
    protected $conflictResults = null;
}
