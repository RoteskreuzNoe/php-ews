<?php

namespace rklandesverband\ews\API\Message;

/**
 * Class representing GetRoomListsResponseMessageType
 *
 *
 * XSD Type: GetRoomListsResponseMessageType
 *
 * @method GetRoomListsResponseMessageType addRoomLists(\rklandesverband\ews\API\Type\EmailAddressType $roomLists)
 * @method \rklandesverband\ews\API\Type\EmailAddressType[] getRoomLists()
 * @method GetRoomListsResponseMessageType setRoomLists(array $roomLists)
 */
class GetRoomListsResponseMessageType extends ResponseMessageType
{

    /**
     * @var \rklandesverband\ews\API\Type\EmailAddressType[]
     */
    protected $roomLists = null;
}
