<?php

namespace rklandesverband\ews\API\Type;

use rklandesverband\ews\API\Type;

/**
 * Class Message
 *
 * @method boolean isRead()
 * @package rklandesverband\ews\API\Type
 */
class Message extends Type
{
    public function isAReply()
    {
        return ($this->exists('InReplyTo') && $this->InReplyTo !== null);
    }
}
