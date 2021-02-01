<?php

namespace rklandesverband\ews\API\Type;

use rklandesverband\ews\API\Type;

/**
 * Class representing TransitionType
 *
 *
 * XSD Type: TransitionType
 *
 * @method TransitionTargetType getTo()
 * @method TransitionType setTo(TransitionTargetType $to)
 */
class TransitionType extends Type
{

    /**
     * @var \rklandesverband\ews\API\Type\TransitionTargetType
     */
    protected $to = null;
}
