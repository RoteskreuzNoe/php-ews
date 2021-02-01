<?php

namespace rklandesverband\ews\API\Message;

/**
 * Class representing ExportItemsType
 *
 *
 * XSD Type: ExportItemsType
 *
 * @method ExportItemsType addItemIds(\rklandesverband\ews\API\Type\ItemIdType $itemIds)
 * @method \rklandesverband\ews\API\Type\ItemIdType[] getItemIds()
 * @method ExportItemsType setItemIds(array $itemIds)
 */
class ExportItemsType extends BaseRequestType
{

    /**
     * @var \rklandesverband\ews\API\Type\ItemIdType[]
     */
    protected $itemIds = null;
}
