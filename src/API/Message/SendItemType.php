<?php

namespace rklandesverband\ews\API\Message;

/**
 * Class representing SendItemType
 *
 *
 * XSD Type: SendItemType
 *
 * @method boolean isSaveItemToFolder()
 * @method boolean getSaveItemToFolder()
 * @method SendItemType setSaveItemToFolder(boolean $saveItemToFolder)
 * @method \rklandesverband\ews\API\Type\NonEmptyArrayOfBaseItemIdsType getItemIds()
 * @method SendItemType setItemIds(\rklandesverband\ews\API\Type\NonEmptyArrayOfBaseItemIdsType $itemIds)
 * @method \rklandesverband\ews\API\Type\TargetFolderIdType getSavedItemFolderId()
 * @method SendItemType setSavedItemFolderId(\rklandesverband\ews\API\Type\TargetFolderIdType $savedItemFolderId)
 */
class SendItemType extends BaseRequestType
{

    /**
     * @var boolean
     */
    protected $saveItemToFolder = null;

    /**
     * @var \rklandesverband\ews\API\Type\NonEmptyArrayOfBaseItemIdsType
     */
    protected $itemIds = null;

    /**
     * @var \rklandesverband\ews\API\Type\TargetFolderIdType
     */
    protected $savedItemFolderId = null;
}
