<?php

namespace rklandesverband\ews\API\Exception;

use rklandesverband\ews\API;
use rklandesverband\ews\API\Message\ResponseMessageType;
use Throwable;

class ExchangeException extends API\Exception
{
    /**
     * @var ResponseMessageType
     */
    private $response;

    public function __construct(ResponseMessageType $response, $code = 0, Throwable $previous = null)
    {
        $this->response = $response;
        parent::__construct($response->getMessageText(), $code, $previous);
    }

    /**
     * @return ResponseMessageType
     */
    public function getResponse()
    {
        return $this->response;
    }
}
