<?php

namespace rklandesverband\ews\API\Message;

/**
 * Class representing RefreshSharingFolderType
 *
 *
 * XSD Type: RefreshSharingFolderType
 *
 * @method \rklandesverband\ews\API\Type\FolderIdType getSharingFolderId()
 * @method RefreshSharingFolderType setSharingFolderId(\rklandesverband\ews\API\Type\FolderIdType $sharingFolderId)
 */
class RefreshSharingFolderType extends BaseRequestType
{

    /**
     * @var \rklandesverband\ews\API\Type\FolderIdType
     */
    protected $sharingFolderId = null;
}
