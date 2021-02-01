<?php

namespace rklandesverband\ews\API\Message;

/**
 * Class representing GetRoomsResponseMessageType
 *
 *
 * XSD Type: GetRoomsResponseMessageType
 *
 * @method GetRoomsResponseMessageType addRooms(\rklandesverband\ews\API\Type\RoomType $rooms)
 * @method \rklandesverband\ews\API\Type\RoomType[] getRooms()
 * @method GetRoomsResponseMessageType setRooms(array $rooms)
 */
class GetRoomsResponseMessageType extends ResponseMessageType
{

    /**
     * @var \rklandesverband\ews\API\Type\RoomType[]
     */
    protected $rooms = null;
}
