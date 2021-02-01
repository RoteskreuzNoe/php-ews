<?php

namespace rklandesverband\ews\API\Message;

use rklandesverband\ews\API\Type\IndexedPageViewType;

/**
 * Class representing FindFolderType
 *
 *
 * XSD Type: FindFolderType
 *
 * @method string getTraversal()
 * @method FindFolderType setTraversal(string $traversal)
 * @method \rklandesverband\ews\API\Type\FolderResponseShapeType getFolderShape()
 * @method FindFolderType setFolderShape(\rklandesverband\ews\API\Type\FolderResponseShapeType $folderShape)
 * @method \rklandesverband\ews\API\Type\IndexedPageViewType getIndexedPageFolderView()
 * @method FindFolderType setIndexedPageFolderView(\rklandesverband\ews\API\Type\IndexedPageViewType $indexedPageFolderView)
 * @method \rklandesverband\ews\API\Type\FractionalPageViewType getFractionalPageFolderView()
 * @method FindFolderType setFractionalPageFolderView(\rklandesverband\ews\API\Type\FractionalPageViewType $fractionalPageFolderView)
 * @method \rklandesverband\ews\API\Type\RestrictionType getRestriction()
 * @method FindFolderType setRestriction(\rklandesverband\ews\API\Type\RestrictionType $restriction)
 * @method \rklandesverband\ews\API\Type\NonEmptyArrayOfBaseFolderIdsType getParentFolderIds()
 * @method FindFolderType setParentFolderIds(\rklandesverband\ews\API\Type\NonEmptyArrayOfBaseFolderIdsType $parentFolderIds)
 */
class FindFolderType extends BaseRequestType
{

    /**
     * @var string
     */
    protected $traversal = null;

    /**
     * @var \rklandesverband\ews\API\Type\FolderResponseShapeType
     */
    protected $folderShape = null;

    /**
     * @var \rklandesverband\ews\API\Type\IndexedPageViewType
     */
    protected $indexedPageFolderView = null;

    /**
     * @var \rklandesverband\ews\API\Type\FractionalPageViewType
     */
    protected $fractionalPageFolderView = null;

    /**
     * @var \rklandesverband\ews\API\Type\RestrictionType
     */
    protected $restriction = null;

    /**
     * @var \rklandesverband\ews\API\Type\NonEmptyArrayOfBaseFolderIdsType
     */
    protected $parentFolderIds = null;

    public function setIndexedPage(IndexedPageViewType $page)
    {
        $this->indexedPageFolderView = $page;
        return $this;
    }
}
