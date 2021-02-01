<?php

namespace rklandesverband\ews\API\Type;

use rklandesverband\ews\API\Type;

/**
 * Class representing NonEmptyArrayOfBaseFolderIdsType
 *
 *
 * XSD Type: NonEmptyArrayOfBaseFolderIdsType
 *
 * @method NonEmptyArrayOfBaseFolderIdsType addFolderId(FolderIdType $folderId)
 * @method FolderIdType[] getFolderId()
 * @method NonEmptyArrayOfBaseFolderIdsType setFolderId(array $folderId)
 * @method NonEmptyArrayOfBaseFolderIdsType addDistinguishedFolderId(DistinguishedFolderIdType $distinguishedFolderId)
 * @method DistinguishedFolderIdType[] getDistinguishedFolderId()
 * @method NonEmptyArrayOfBaseFolderIdsType setDistinguishedFolderId(array $distinguishedFolderId)
 */
class NonEmptyArrayOfBaseFolderIdsType extends Type
{

    /**
     * @var \rklandesverband\ews\API\Type\FolderIdType[]
     */
    protected $folderId = null;

    /**
     * @var \rklandesverband\ews\API\Type\DistinguishedFolderIdType[]
     */
    protected $distinguishedFolderId = null;
}
