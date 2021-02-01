<?php

namespace rklandesverband\ews\API\Type;

use rklandesverband\ews\API\Type;

/**
 * Class representing ArrayOfTrackingPropertiesType
 *
 *
 * XSD Type: ArrayOfTrackingPropertiesType
 *
 * @method ArrayOfTrackingPropertiesType addTrackingPropertyType(TrackingPropertyType $trackingPropertyType)
 * @method TrackingPropertyType[] getTrackingPropertyType()
 * @method ArrayOfTrackingPropertiesType setTrackingPropertyType(array $trackingPropertyType)
 */
class ArrayOfTrackingPropertiesType extends Type
{

    /**
     * @var \rklandesverband\ews\API\Type\TrackingPropertyType[]
     */
    protected $trackingPropertyType = null;
}
