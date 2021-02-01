<?php

namespace rklandesverband\ews\API\Message;

/**
 * Class representing GetSharingFolderResponseMessageType
 *
 *
 * XSD Type: GetSharingFolderResponseMessageType
 *
 * @method \rklandesverband\ews\API\Type\FolderIdType getSharingFolderId()
 * @method GetSharingFolderResponseMessageType setSharingFolderId(\rklandesverband\ews\API\Type\FolderIdType $sharingFolderId)
 */
class GetSharingFolderResponseMessageType extends ResponseMessageType
{

    /**
     * @var \rklandesverband\ews\API\Type\FolderIdType
     */
    protected $sharingFolderId = null;
}
