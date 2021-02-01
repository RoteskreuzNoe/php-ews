<?php

namespace rklandesverband\ews\API\Message;

/**
 * Class representing BaseMoveCopyItemType
 *
 *
 * XSD Type: BaseMoveCopyItemType
 *
 * @method \rklandesverband\ews\API\Type\TargetFolderIdType getToFolderId()
 * @method BaseMoveCopyItemType setToFolderId(\rklandesverband\ews\API\Type\TargetFolderIdType $toFolderId)
 * @method \rklandesverband\ews\API\Type\NonEmptyArrayOfBaseItemIdsType getItemIds()
 * @method BaseMoveCopyItemType setItemIds(\rklandesverband\ews\API\Type\NonEmptyArrayOfBaseItemIdsType $itemIds)
 * @method boolean isReturnNewItemIds()
 * @method boolean getReturnNewItemIds()
 * @method BaseMoveCopyItemType setReturnNewItemIds(boolean $returnNewItemIds)
 */
class BaseMoveCopyItemType extends BaseRequestType
{

    /**
     * @var \rklandesverband\ews\API\Type\TargetFolderIdType
     */
    protected $toFolderId = null;

    /**
     * @var \rklandesverband\ews\API\Type\NonEmptyArrayOfBaseItemIdsType
     */
    protected $itemIds = null;

    /**
     * @var boolean
     */
    protected $returnNewItemIds = null;
}
