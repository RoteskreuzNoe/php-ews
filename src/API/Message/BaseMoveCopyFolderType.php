<?php

namespace rklandesverband\ews\API\Message;

/**
 * Class representing BaseMoveCopyFolderType
 *
 *
 * XSD Type: BaseMoveCopyFolderType
 *
 * @method \rklandesverband\ews\API\Type\TargetFolderIdType getToFolderId()
 * @method BaseMoveCopyFolderType setToFolderId(\rklandesverband\ews\API\Type\TargetFolderIdType $toFolderId)
 * @method \rklandesverband\ews\API\Type\NonEmptyArrayOfBaseFolderIdsType getFolderIds()
 * @method BaseMoveCopyFolderType setFolderIds(\rklandesverband\ews\API\Type\NonEmptyArrayOfBaseFolderIdsType $folderIds)
 */
class BaseMoveCopyFolderType extends BaseRequestType
{

    /**
     * @var \rklandesverband\ews\API\Type\TargetFolderIdType
     */
    protected $toFolderId = null;

    /**
     * @var \rklandesverband\ews\API\Type\NonEmptyArrayOfBaseFolderIdsType
     */
    protected $folderIds = null;
}
