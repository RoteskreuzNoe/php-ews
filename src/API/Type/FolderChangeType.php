<?php

namespace rklandesverband\ews\API\Type;

use rklandesverband\ews\API\Type;

/**
 * Class representing FolderChangeType
 *
 *
 * XSD Type: FolderChangeType
 *
 * @method FolderIdType getFolderId()
 * @method FolderChangeType setFolderId(FolderIdType $folderId)
 * @method DistinguishedFolderIdType getDistinguishedFolderId()
 * @method FolderChangeType setDistinguishedFolderId(DistinguishedFolderIdType $distinguishedFolderId)
 * @method NonEmptyArrayOfFolderChangeDescriptionsType getUpdates()
 * @method FolderChangeType setUpdates(NonEmptyArrayOfFolderChangeDescriptionsType $updates)
 */
class FolderChangeType extends Type
{

    /**
     * @var \rklandesverband\ews\API\Type\FolderIdType
     */
    protected $folderId = null;

    /**
     * @var \rklandesverband\ews\API\Type\DistinguishedFolderIdType
     */
    protected $distinguishedFolderId = null;

    /**
     * @var \rklandesverband\ews\API\Type\NonEmptyArrayOfFolderChangeDescriptionsType
     */
    protected $updates = null;
}
