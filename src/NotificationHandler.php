<?php

namespace rklandesverband\ews;

use rklandesverband\ews\API\Enumeration\SubscriptionStatusType;
use rklandesverband\ews\API\Exception;
use rklandesverband\ews\API\ExchangeWebServices;
use rklandesverband\ews\API\Message\SendNotificationResponseMessageType;
use rklandesverband\ews\API\Message\SendNotificationResponseType;
use rklandesverband\ews\API\Message\SendNotificationResultType;

class NotificationHandler
{
    private $handler;

    public function __construct(callable $handler)
    {
        $this->handler = $handler;
    }

    // @codingStandardsIgnoreLine
    public function SendNotification(SendNotificationResponseType $message)
    {
        $message = ExchangeWebServices::drillDownResponseLevels($message);

        $handler = $this->handler;
        $response = $handler($message);

        if ($response !== SubscriptionStatusType::OK && $response !== SubscriptionStatusType::UNSUBSCRIBE) {
            throw new Exception('Unexpected Subscription Status Response');
        }

        $result = new SendNotificationResultType();
        $result->setSubscriptionStatus($response);

        return $result->toXmlObject();
    }
}
