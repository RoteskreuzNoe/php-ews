<?php

namespace rklandesverband\ews\API\Type;

use rklandesverband\ews\API\Type;

/**
 * Class representing WorkingHoursType
 *
 *
 * XSD Type: WorkingHours
 *
 * @method SerializableTimeZoneType getTimeZone()
 * @method WorkingHoursType setTimeZone(SerializableTimeZoneType $timeZone)
 * @method WorkingHoursType addWorkingPeriodArray(WorkingPeriodType $workingPeriodArray)
 * @method WorkingPeriodType[] getWorkingPeriodArray()
 * @method WorkingHoursType setWorkingPeriodArray(array $workingPeriodArray)
 */
class WorkingHoursType extends Type
{

    /**
     * @var \rklandesverband\ews\API\Type\SerializableTimeZoneType
     */
    protected $timeZone = null;

    /**
     * @var \rklandesverband\ews\API\Type\WorkingPeriodType[]
     */
    protected $workingPeriodArray = null;
}
