<?php

namespace rklandesverband\ews\API\Message;

use rklandesverband\ews\API\Message;

/**
 * Class representing SuggestionsResponseType
 *
 *
 * XSD Type: SuggestionsResponseType
 *
 * @method ResponseMessageType getResponseMessage()
 * @method SuggestionsResponseType setResponseMessage(ResponseMessageType $responseMessage)
 * @method SuggestionsResponseType addSuggestionDayResultArray(\rklandesverband\ews\API\Type\SuggestionDayResultType $suggestionDayResultArray)
 * @method \rklandesverband\ews\API\Type\SuggestionDayResultType[] getSuggestionDayResultArray()
 * @method SuggestionsResponseType setSuggestionDayResultArray(array $suggestionDayResultArray)
 */
class SuggestionsResponseType extends Message
{

    /**
     * @var \rklandesverband\ews\API\Message\ResponseMessageType
     */
    protected $responseMessage = null;

    /**
     * @var \rklandesverband\ews\API\Type\SuggestionDayResultType[]
     */
    protected $suggestionDayResultArray = null;
}
