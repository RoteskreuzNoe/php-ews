<?php

namespace rklandesverband\ews\API\Message;

use rklandesverband\ews\API\Message;

/**
 * Class representing FreeBusyResponseType
 *
 *
 * XSD Type: FreeBusyResponseType
 *
 * @method ResponseMessageType getResponseMessage()
 * @method FreeBusyResponseType setResponseMessage(ResponseMessageType $responseMessage)
 * @method \rklandesverband\ews\API\Type\FreeBusyViewType getFreeBusyView()
 * @method FreeBusyResponseType setFreeBusyView(\rklandesverband\ews\API\Type\FreeBusyViewType $freeBusyView)
 */
class FreeBusyResponseType extends Message
{

    /**
     * @var \rklandesverband\ews\API\Message\ResponseMessageType
     */
    protected $responseMessage = null;

    /**
     * @var \rklandesverband\ews\API\Type\FreeBusyViewType
     */
    protected $freeBusyView = null;
}
