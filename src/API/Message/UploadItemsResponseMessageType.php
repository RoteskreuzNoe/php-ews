<?php

namespace rklandesverband\ews\API\Message;

/**
 * Class representing UploadItemsResponseMessageType
 *
 *
 * XSD Type: UploadItemsResponseMessageType
 *
 * @method \rklandesverband\ews\API\Type\ItemIdType getItemId()
 * @method UploadItemsResponseMessageType setItemId(\rklandesverband\ews\API\Type\ItemIdType $itemId)
 */
class UploadItemsResponseMessageType extends ResponseMessageType
{

    /**
     * @var \rklandesverband\ews\API\Type\ItemIdType
     */
    protected $itemId = null;
}
