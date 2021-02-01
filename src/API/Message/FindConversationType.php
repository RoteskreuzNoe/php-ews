<?php

namespace rklandesverband\ews\API\Message;

/**
 * Class representing FindConversationType
 *
 *
 * XSD Type: FindConversationType
 *
 * @method \rklandesverband\ews\API\Type\IndexedPageViewType getIndexedPageItemView()
 * @method FindConversationType setIndexedPageItemView(\rklandesverband\ews\API\Type\IndexedPageViewType $indexedPageItemView)
 * @method FindConversationType addSortOrder(\rklandesverband\ews\API\Type\FieldOrderType $sortOrder)
 * @method \rklandesverband\ews\API\Type\FieldOrderType[] getSortOrder()
 * @method FindConversationType setSortOrder(array $sortOrder)
 * @method \rklandesverband\ews\API\Type\TargetFolderIdType getParentFolderId()
 * @method FindConversationType setParentFolderId(\rklandesverband\ews\API\Type\TargetFolderIdType $parentFolderId)
 */
class FindConversationType extends BaseRequestType
{

    /**
     * @var \rklandesverband\ews\API\Type\IndexedPageViewType
     */
    protected $indexedPageItemView = null;

    /**
     * @var \rklandesverband\ews\API\Type\FieldOrderType[]
     */
    protected $sortOrder = null;

    /**
     * @var \rklandesverband\ews\API\Type\TargetFolderIdType
     */
    protected $parentFolderId = null;
}
