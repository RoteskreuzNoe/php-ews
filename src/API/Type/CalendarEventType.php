<?php

namespace rklandesverband\ews\API\Type;

use rklandesverband\ews\API\Type;

/**
 * Class representing CalendarEventType
 *
 *
 * XSD Type: CalendarEvent
 *
 * @method \DateTime getStartTime()
 * @method CalendarEventType setStartTime(\DateTime $startTime)
 * @method \DateTime getEndTime()
 * @method CalendarEventType setEndTime(\DateTime $endTime)
 * @method string getBusyType()
 * @method CalendarEventType setBusyType(string $busyType)
 * @method CalendarEventDetailsType getCalendarEventDetails()
 * @method CalendarEventType setCalendarEventDetails(CalendarEventDetailsType $calendarEventDetails)
 */
class CalendarEventType extends Type
{

    /**
     * @var \DateTime
     */
    protected $startTime = null;

    protected $_typeMap = array(
        'startTime' => 'dateTime',
        'endTime' => 'dateTime',
    );

    /**
     * @var \DateTime
     */
    protected $endTime = null;

    /**
     * @var string
     */
    protected $busyType = null;

    /**
     * @var \rklandesverband\ews\API\Type\CalendarEventDetailsType
     */
    protected $calendarEventDetails = null;
}
