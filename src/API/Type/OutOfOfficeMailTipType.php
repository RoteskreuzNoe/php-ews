<?php

namespace rklandesverband\ews\API\Type;

use rklandesverband\ews\API\Type;

/**
 * Class representing OutOfOfficeMailTipType
 *
 *
 * XSD Type: OutOfOfficeMailTip
 *
 * @method ReplyBodyType getReplyBody()
 * @method OutOfOfficeMailTipType setReplyBody(ReplyBodyType $replyBody)
 * @method DurationType getDuration()
 * @method OutOfOfficeMailTipType setDuration(DurationType $duration)
 */
class OutOfOfficeMailTipType extends Type
{

    /**
     * @var \rklandesverband\ews\API\Type\ReplyBodyType
     */
    protected $replyBody = null;

    /**
     * @var \rklandesverband\ews\API\Type\DurationType
     */
    protected $duration = null;
}
