<?php

namespace rklandesverband\ews\API\Message;

/**
 * Class representing FolderInfoResponseMessageType
 *
 *
 * XSD Type: FolderInfoResponseMessageType
 *
 * @method \rklandesverband\ews\API\Type\ArrayOfFoldersType getFolders()
 * @method FolderInfoResponseMessageType setFolders(\rklandesverband\ews\API\Type\ArrayOfFoldersType $folders)
 */
class FolderInfoResponseMessageType extends ResponseMessageType
{

    /**
     * @var \rklandesverband\ews\API\Type\ArrayOfFoldersType
     */
    protected $folders = null;
}
