<?php

namespace rklandesverband\ews\API\Type;

use rklandesverband\ews\API\Type;

/**
 * Class representing SerializableTimeZoneType
 *
 *
 * XSD Type: SerializableTimeZone
 *
 * @method integer getBias()
 * @method SerializableTimeZoneType setBias(integer $bias)
 * @method SerializableTimeZoneTimeType getStandardTime()
 * @method SerializableTimeZoneType setStandardTime(SerializableTimeZoneTimeType $standardTime)
 * @method SerializableTimeZoneTimeType getDaylightTime()
 * @method SerializableTimeZoneType setDaylightTime(SerializableTimeZoneTimeType $daylightTime)
 */
class SerializableTimeZoneType extends Type
{

    /**
     * @var integer
     */
    protected $bias = null;

    /**
     * @var \rklandesverband\ews\API\Type\SerializableTimeZoneTimeType
     */
    protected $standardTime = null;

    /**
     * @var \rklandesverband\ews\API\Type\SerializableTimeZoneTimeType
     */
    protected $daylightTime = null;
}
