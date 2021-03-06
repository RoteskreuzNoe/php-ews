<?php

namespace rklandesverband\ews\API\Type;

use rklandesverband\ews\API\Type;

/**
 * Class representing RecurrenceRangeBaseType
 *
 *
 * XSD Type: RecurrenceRangeBaseType
 *
 * @method \DateTime getStartDate()
 * @method RecurrenceRangeBaseType setStartDate(\DateTime $startDate)
 */
class RecurrenceRangeBaseType extends Type
{

    /**
     * @var \DateTime
     */
    protected $startDate = null;

    protected $_typeMap = array(
        'startDate' => 'date',
    );
}
