<?php

namespace rklandesverband\ews\API\Type;

use rklandesverband\ews\API\Type;

/**
 * Class representing SuggestionDayResultType
 *
 *
 * XSD Type: SuggestionDayResult
 *
 * @method \DateTime getDate()
 * @method SuggestionDayResultType setDate(\DateTime $date)
 * @method string getDayQuality()
 * @method SuggestionDayResultType setDayQuality(string $dayQuality)
 * @method SuggestionDayResultType addSuggestionArray(SuggestionType $suggestionArray)
 * @method SuggestionType[] getSuggestionArray()
 * @method SuggestionDayResultType setSuggestionArray(array $suggestionArray)
 */
class SuggestionDayResultType extends Type
{

    /**
     * @var \DateTime
     */
    protected $date = null;

    protected $_typeMap = array(
        'date' => 'dateTime',
    );

    /**
     * @var string
     */
    protected $dayQuality = null;

    /**
     * @var \rklandesverband\ews\API\Type\SuggestionType[]
     */
    protected $suggestionArray = null;
}
