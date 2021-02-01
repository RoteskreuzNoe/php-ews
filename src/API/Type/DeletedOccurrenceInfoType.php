<?php

namespace rklandesverband\ews\API\Type;

use rklandesverband\ews\API\Type;

/**
 * Class representing DeletedOccurrenceInfoType
 *
 *
 * XSD Type: DeletedOccurrenceInfoType
 *
 * @method \DateTime getStart()
 * @method DeletedOccurrenceInfoType setStart(\DateTime $start)
 */
class DeletedOccurrenceInfoType extends Type
{

    /**
     * @var \DateTime
     */
    protected $start = null;

    protected $_typeMap = array(
        'start' => 'dateTime',
    );
}
