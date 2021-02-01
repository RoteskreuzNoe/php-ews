<?php

namespace rklandesverband\ews\API\Message;

/**
 * Class representing CreateFolderType
 *
 *
 * XSD Type: CreateFolderType
 *
 * @method \rklandesverband\ews\API\Type\TargetFolderIdType getParentFolderId()
 * @method CreateFolderType setParentFolderId(\rklandesverband\ews\API\Type\TargetFolderIdType $parentFolderId)
 * @method \rklandesverband\ews\API\Type\NonEmptyArrayOfFoldersType getFolders()
 * @method CreateFolderType setFolders(\rklandesverband\ews\API\Type\NonEmptyArrayOfFoldersType $folders)
 */
class CreateFolderType extends BaseRequestType
{

    /**
     * @var \rklandesverband\ews\API\Type\TargetFolderIdType
     */
    protected $parentFolderId = null;

    /**
     * @var \rklandesverband\ews\API\Type\NonEmptyArrayOfFoldersType
     */
    protected $folders = null;
}
