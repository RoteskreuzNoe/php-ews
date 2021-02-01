<?php

namespace rklandesverband\ews\API\Type;

use rklandesverband\ews\API\Type;

/**
 * Class representing TargetFolderIdType
 *
 *
 * XSD Type: TargetFolderIdType
 *
 * @method FolderIdType getFolderId()
 * @method TargetFolderIdType setFolderId(FolderIdType $folderId)
 * @method DistinguishedFolderIdType getDistinguishedFolderId()
 * @method TargetFolderIdType setDistinguishedFolderId(DistinguishedFolderIdType $distinguishedFolderId)
 */
class TargetFolderIdType extends Type
{

    /**
     * @var \rklandesverband\ews\API\Type\FolderIdType
     */
    protected $folderId = null;

    /**
     * @var \rklandesverband\ews\API\Type\DistinguishedFolderIdType
     */
    protected $distinguishedFolderId = null;
}
