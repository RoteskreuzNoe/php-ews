<?php

namespace rklandesverband\ews\API\Message;

/**
 * Class representing SubscribeType
 *
 *
 * XSD Type: SubscribeType
 *
 * @method \rklandesverband\ews\API\Type\PullSubscriptionRequestType getPullSubscriptionRequest()
 * @method SubscribeType setPullSubscriptionRequest(\rklandesverband\ews\API\Type\PullSubscriptionRequestType $pullSubscriptionRequest)
 * @method \rklandesverband\ews\API\Type\PushSubscriptionRequestType getPushSubscriptionRequest()
 * @method SubscribeType setPushSubscriptionRequest(\rklandesverband\ews\API\Type\PushSubscriptionRequestType $pushSubscriptionRequest)
 * @method \rklandesverband\ews\API\Type\StreamingSubscriptionRequestType getStreamingSubscriptionRequest()
 * @method SubscribeType setStreamingSubscriptionRequest(\rklandesverband\ews\API\Type\StreamingSubscriptionRequestType $streamingSubscriptionRequest)
 */
class SubscribeType extends BaseRequestType
{

    /**
     * @var \rklandesverband\ews\API\Type\PullSubscriptionRequestType
     */
    protected $pullSubscriptionRequest = null;

    /**
     * @var \rklandesverband\ews\API\Type\PushSubscriptionRequestType
     */
    protected $pushSubscriptionRequest = null;

    /**
     * @var \rklandesverband\ews\API\Type\StreamingSubscriptionRequestType
     */
    protected $streamingSubscriptionRequest = null;
}
