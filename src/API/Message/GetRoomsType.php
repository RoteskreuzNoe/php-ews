<?php

namespace rklandesverband\ews\API\Message;

/**
 * Class representing GetRoomsType
 *
 *
 * XSD Type: GetRoomsType
 *
 * @method \rklandesverband\ews\API\Type\EmailAddressType getRoomList()
 * @method GetRoomsType setRoomList(\rklandesverband\ews\API\Type\EmailAddressType $roomList)
 */
class GetRoomsType extends BaseRequestType
{

    /**
     * @var \rklandesverband\ews\API\Type\EmailAddressType
     */
    protected $roomList = null;
}
