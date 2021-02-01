<?php

namespace rklandesverband\ews\API\Message;

/**
 * Class representing FindFolderResponseMessageType
 *
 *
 * XSD Type: FindFolderResponseMessageType
 *
 * @method \rklandesverband\ews\API\Type\FindFolderParentType getRootFolder()
 * @method FindFolderResponseMessageType setRootFolder(\rklandesverband\ews\API\Type\FindFolderParentType $rootFolder)
 */
class FindFolderResponseMessageType extends ResponseMessageType
{

    /**
     * @var \rklandesverband\ews\API\Type\FindFolderParentType
     */
    protected $rootFolder = null;
}
