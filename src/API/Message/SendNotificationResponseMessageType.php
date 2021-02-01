<?php

namespace rklandesverband\ews\API\Message;

/**
 * Class representing SendNotificationResponseMessageType
 *
 *
 * XSD Type: SendNotificationResponseMessageType
 *
 * @method \rklandesverband\ews\API\Type\NotificationType getNotification()
 * @method SendNotificationResponseMessageType setNotification(\rklandesverband\ews\API\Type\NotificationType $notification)
 */
class SendNotificationResponseMessageType extends ResponseMessageType
{

    /**
     * @var \rklandesverband\ews\API\Type\NotificationType
     */
    protected $notification = null;
}
