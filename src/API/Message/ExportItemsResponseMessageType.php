<?php

namespace rklandesverband\ews\API\Message;

/**
 * Class representing ExportItemsResponseMessageType
 *
 *
 * XSD Type: ExportItemsResponseMessageType
 *
 * @method \rklandesverband\ews\API\Type\ItemIdType getItemId()
 * @method ExportItemsResponseMessageType setItemId(\rklandesverband\ews\API\Type\ItemIdType $itemId)
 * @method string getData()
 * @method ExportItemsResponseMessageType setData(string $data)
 */
class ExportItemsResponseMessageType extends ResponseMessageType
{

    /**
     * @var \rklandesverband\ews\API\Type\ItemIdType
     */
    protected $itemId = null;

    /**
     * @var string
     */
    protected $data = null;
}
