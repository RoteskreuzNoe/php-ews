<?php

namespace rklandesverband\ews\API\Message;

/**
 * Class representing GetItemType
 *
 *
 * XSD Type: GetItemType
 *
 * @method \rklandesverband\ews\API\Type\ItemResponseShapeType getItemShape()
 * @method GetItemType setItemShape(\rklandesverband\ews\API\Type\ItemResponseShapeType $itemShape)
 * @method \rklandesverband\ews\API\Type\NonEmptyArrayOfBaseItemIdsType getItemIds()
 * @method GetItemType setItemIds(\rklandesverband\ews\API\Type\NonEmptyArrayOfBaseItemIdsType $itemIds)
 */
class GetItemType extends BaseRequestType
{

    /**
     * @var \rklandesverband\ews\API\Type\ItemResponseShapeType
     */
    protected $itemShape = null;

    /**
     * @var \rklandesverband\ews\API\Type\NonEmptyArrayOfBaseItemIdsType
     */
    protected $itemIds = null;
}
