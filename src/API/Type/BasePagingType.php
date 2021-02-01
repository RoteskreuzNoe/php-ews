<?php

namespace rklandesverband\ews\API\Type;

use rklandesverband\ews\API\Type;

/**
 * Class representing BasePagingType
 *
 *
 * XSD Type: BasePagingType
 *
 * @method integer getMaxEntriesReturned()
 * @method BasePagingType setMaxEntriesReturned(integer $maxEntriesReturned)
 */
class BasePagingType extends Type
{

    /**
     * @var integer
     */
    protected $maxEntriesReturned = null;
}
