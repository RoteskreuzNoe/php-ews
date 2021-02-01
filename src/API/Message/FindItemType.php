<?php

namespace rklandesverband\ews\API\Message;

use rklandesverband\ews\API\Type\IndexedPageViewType;

/**
 * Class representing FindItemType
 *
 *
 * XSD Type: FindItemType
 *
 * @method string getTraversal()
 * @method FindItemType setTraversal(string $traversal)
 * @method \rklandesverband\ews\API\Type\ItemResponseShapeType getItemShape()
 * @method FindItemType setItemShape(\rklandesverband\ews\API\Type\ItemResponseShapeType $itemShape)
 * @method \rklandesverband\ews\API\Type\IndexedPageViewType getIndexedPageItemView()
 * @method FindItemType setIndexedPageItemView(\rklandesverband\ews\API\Type\IndexedPageViewType $indexedPageItemView)
 * @method \rklandesverband\ews\API\Type\FractionalPageViewType getFractionalPageItemView()
 * @method FindItemType setFractionalPageItemView(\rklandesverband\ews\API\Type\FractionalPageViewType $fractionalPageItemView)
 * @method \rklandesverband\ews\API\Type\CalendarViewType getCalendarView()
 * @method FindItemType setCalendarView(\rklandesverband\ews\API\Type\CalendarViewType $calendarView)
 * @method \rklandesverband\ews\API\Type\ContactsViewType getContactsView()
 * @method FindItemType setContactsView(\rklandesverband\ews\API\Type\ContactsViewType $contactsView)
 * @method \rklandesverband\ews\API\Type\GroupByType getGroupBy()
 * @method FindItemType setGroupBy(\rklandesverband\ews\API\Type\GroupByType $groupBy)
 * @method \rklandesverband\ews\API\Type\DistinguishedGroupByType getDistinguishedGroupBy()
 * @method FindItemType setDistinguishedGroupBy(\rklandesverband\ews\API\Type\DistinguishedGroupByType $distinguishedGroupBy)
 * @method \rklandesverband\ews\API\Type\RestrictionType getRestriction()
 * @method FindItemType setRestriction(\rklandesverband\ews\API\Type\RestrictionType $restriction)
 * @method FindItemType addSortOrder(\rklandesverband\ews\API\Type\FieldOrderType $sortOrder)
 * @method \rklandesverband\ews\API\Type\FieldOrderType[] getSortOrder()
 * @method FindItemType setSortOrder(array $sortOrder)
 * @method \rklandesverband\ews\API\Type\NonEmptyArrayOfBaseFolderIdsType getParentFolderIds()
 * @method FindItemType setParentFolderIds(\rklandesverband\ews\API\Type\NonEmptyArrayOfBaseFolderIdsType $parentFolderIds)
 * @method string getQueryString()
 * @method FindItemType setQueryString(string $queryString)
 */
class FindItemType extends BaseRequestType
{

    /**
     * @var string
     */
    protected $traversal = null;

    /**
     * @var \rklandesverband\ews\API\Type\ItemResponseShapeType
     */
    protected $itemShape = null;

    /**
     * @var \rklandesverband\ews\API\Type\IndexedPageViewType
     */
    protected $indexedPageItemView = null;

    /**
     * @var \rklandesverband\ews\API\Type\FractionalPageViewType
     */
    protected $fractionalPageItemView = null;

    /**
     * @var \rklandesverband\ews\API\Type\CalendarViewType
     */
    protected $calendarView = null;

    /**
     * @var \rklandesverband\ews\API\Type\ContactsViewType
     */
    protected $contactsView = null;

    /**
     * @var \rklandesverband\ews\API\Type\GroupByType
     */
    protected $groupBy = null;

    /**
     * @var \rklandesverband\ews\API\Type\DistinguishedGroupByType
     */
    protected $distinguishedGroupBy = null;

    /**
     * @var \rklandesverband\ews\API\Type\RestrictionType
     */
    protected $restriction = null;

    /**
     * @var \rklandesverband\ews\API\Type\FieldOrderType[]
     */
    protected $sortOrder = null;

    /**
     * @var \rklandesverband\ews\API\Type\NonEmptyArrayOfBaseFolderIdsType
     */
    protected $parentFolderIds = null;

    /**
     * @var string
     */
    protected $queryString = null;

    public function setIndexedPage(IndexedPageViewType $page)
    {
        $this->indexedPageItemView = $page;
        return $this;
    }
}
