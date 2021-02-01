<?php

namespace rklandesverband\ews\API\Message;

/**
 * Class representing GetServerTimeZonesResponseMessageType
 *
 *
 * XSD Type: GetServerTimeZonesResponseMessageType
 *
 * @method GetServerTimeZonesResponseMessageType addTimeZoneDefinitions(\rklandesverband\ews\API\Type\TimeZoneDefinitionType $timeZoneDefinitions)
 * @method \rklandesverband\ews\API\Type\TimeZoneDefinitionType[] getTimeZoneDefinitions()
 * @method GetServerTimeZonesResponseMessageType setTimeZoneDefinitions(array $timeZoneDefinitions)
 */
class GetServerTimeZonesResponseMessageType extends ResponseMessageType
{

    /**
     * @var \rklandesverband\ews\API\Type\TimeZoneDefinitionType[]
     */
    protected $timeZoneDefinitions = null;
}
