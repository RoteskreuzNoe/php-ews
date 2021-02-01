<?php

namespace rklandesverband\ews\API\Type;

use rklandesverband\ews\API\Type;

/**
 * Class representing SidAndAttributesType
 *
 *
 * XSD Type: SidAndAttributesType
 *
 * @method integer getAttributes()
 * @method SidAndAttributesType setAttributes(integer $attributes)
 * @method string getSecurityIdentifier()
 * @method SidAndAttributesType setSecurityIdentifier(string $securityIdentifier)
 */
class SidAndAttributesType extends Type
{

    /**
     * @var integer
     */
    protected $attributes = null;

    /**
     * @var string
     */
    protected $securityIdentifier = null;
}
