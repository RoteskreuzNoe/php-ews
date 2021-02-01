<?php

namespace rklandesverband\ews\API\Message;

/**
 * Class representing DeleteFolderType
 *
 *
 * XSD Type: DeleteFolderType
 *
 * @method string getDeleteType()
 * @method DeleteFolderType setDeleteType(string $deleteType)
 * @method \rklandesverband\ews\API\Type\NonEmptyArrayOfBaseFolderIdsType getFolderIds()
 * @method DeleteFolderType setFolderIds(\rklandesverband\ews\API\Type\NonEmptyArrayOfBaseFolderIdsType $folderIds)
 */
class DeleteFolderType extends BaseRequestType
{

    /**
     * @var string
     */
    protected $deleteType = null;

    /**
     * @var \rklandesverband\ews\API\Type\NonEmptyArrayOfBaseFolderIdsType
     */
    protected $folderIds = null;
}
