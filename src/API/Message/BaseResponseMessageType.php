<?php

namespace rklandesverband\ews\API\Message;

use rklandesverband\ews\API\Message;

/**
 * Class representing BaseResponseMessageType
 *
 *
 * XSD Type: BaseResponseMessageType
 *
 * @method ArrayOfResponseMessagesType getResponseMessages()
 * @method BaseResponseMessageType setResponseMessages(ArrayOfResponseMessagesType $responseMessages)
 */
class BaseResponseMessageType extends Message
{

    /**
     * @var \rklandesverband\ews\API\Message\ArrayOfResponseMessagesType
     */
    protected $responseMessages = null;
}
