<?php

namespace rklandesverband\ews\API\Message;

/**
 * Class representing UpdateFolderType
 *
 *
 * XSD Type: UpdateFolderType
 *
 * @method UpdateFolderType addFolderChanges(\rklandesverband\ews\API\Type\FolderChangeType $folderChanges)
 * @method \rklandesverband\ews\API\Type\FolderChangeType[] getFolderChanges()
 * @method UpdateFolderType setFolderChanges(array $folderChanges)
 */
class UpdateFolderType extends BaseRequestType
{

    /**
     * @var \rklandesverband\ews\API\Type\FolderChangeType[]
     */
    protected $folderChanges = null;
}
