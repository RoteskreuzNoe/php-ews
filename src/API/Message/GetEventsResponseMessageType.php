<?php

namespace rklandesverband\ews\API\Message;

/**
 * Class representing GetEventsResponseMessageType
 *
 *
 * XSD Type: GetEventsResponseMessageType
 *
 * @method \rklandesverband\ews\API\Type\NotificationType getNotification()
 * @method GetEventsResponseMessageType setNotification(\rklandesverband\ews\API\Type\NotificationType $notification)
 */
class GetEventsResponseMessageType extends ResponseMessageType
{

    /**
     * @var \rklandesverband\ews\API\Type\NotificationType
     */
    protected $notification = null;
}
