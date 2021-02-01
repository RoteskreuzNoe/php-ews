<?php

namespace rklandesverband\ews\API\Message;

/**
 * Class representing FindItemResponseMessageType
 *
 *
 * XSD Type: FindItemResponseMessageType
 *
 * @method \rklandesverband\ews\API\Type\FindItemParentType getRootFolder()
 * @method FindItemResponseMessageType setRootFolder(\rklandesverband\ews\API\Type\FindItemParentType $rootFolder)
 */
class FindItemResponseMessageType extends ResponseMessageType
{

    /**
     * @var \rklandesverband\ews\API\Type\FindItemParentType
     */
    protected $rootFolder = null;
}
