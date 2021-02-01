<?php

namespace rklandesverband\ews\API\Message;

/**
 * Class representing PlayOnPhoneType
 *
 *
 * XSD Type: PlayOnPhoneType
 *
 * @method \rklandesverband\ews\API\Type\ItemIdType getItemId()
 * @method PlayOnPhoneType setItemId(\rklandesverband\ews\API\Type\ItemIdType $itemId)
 * @method string getDialString()
 * @method PlayOnPhoneType setDialString(string $dialString)
 */
class PlayOnPhoneType extends BaseRequestType
{

    /**
     * @var \rklandesverband\ews\API\Type\ItemIdType
     */
    protected $itemId = null;

    /**
     * @var string
     */
    protected $dialString = null;
}
