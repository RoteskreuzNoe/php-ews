<?php

namespace rklandesverband\ews\API\Message;

/**
 * Class representing ItemInfoResponseMessageType
 *
 *
 * XSD Type: ItemInfoResponseMessageType
 *
 * @method \rklandesverband\ews\API\Type\ArrayOfRealItemsType getItems()
 * @method ItemInfoResponseMessageType setItems(\rklandesverband\ews\API\Type\ArrayOfRealItemsType $items)
 */
class ItemInfoResponseMessageType extends ResponseMessageType
{

    /**
     * @var \rklandesverband\ews\API\Type\ArrayOfRealItemsType
     */
    protected $items = null;
}
