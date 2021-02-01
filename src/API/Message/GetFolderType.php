<?php

namespace rklandesverband\ews\API\Message;

/**
 * Class representing GetFolderType
 *
 *
 * XSD Type: GetFolderType
 *
 * @method \rklandesverband\ews\API\Type\FolderResponseShapeType getFolderShape()
 * @method GetFolderType setFolderShape(\rklandesverband\ews\API\Type\FolderResponseShapeType $folderShape)
 * @method \rklandesverband\ews\API\Type\NonEmptyArrayOfBaseFolderIdsType getFolderIds()
 * @method GetFolderType setFolderIds(\rklandesverband\ews\API\Type\NonEmptyArrayOfBaseFolderIdsType $folderIds)
 */
class GetFolderType extends BaseRequestType
{

    /**
     * @var \rklandesverband\ews\API\Type\FolderResponseShapeType
     */
    protected $folderShape = null;

    /**
     * @var \rklandesverband\ews\API\Type\NonEmptyArrayOfBaseFolderIdsType
     */
    protected $folderIds = null;
}
