<?php

namespace rklandesverband\ews\API\Message;

/**
 * Class representing UploadItemsType
 *
 *
 * XSD Type: UploadItemsType
 *
 * @method UploadItemsType addItems(\rklandesverband\ews\API\Type\UploadItemType $items)
 * @method \rklandesverband\ews\API\Type\UploadItemType[] getItems()
 * @method UploadItemsType setItems(array $items)
 */
class UploadItemsType extends BaseRequestType
{

    /**
     * @var \rklandesverband\ews\API\Type\UploadItemType[]
     */
    protected $items = null;
}
