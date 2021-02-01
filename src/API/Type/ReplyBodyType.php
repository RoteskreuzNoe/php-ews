<?php

namespace rklandesverband\ews\API\Type;

use rklandesverband\ews\API\Type;

/**
 * Class representing ReplyBodyType
 *
 *
 * XSD Type: ReplyBody
 *
 * @method \rklandesverband\ews\API\Type\ReplyBodyType\LangAType getLang()
 * @method ReplyBodyType setLang(\rklandesverband\ews\API\Type\ReplyBodyType\LangAType $lang)
 * @method string getMessage()
 * @method ReplyBodyType setMessage(string $message)
 */
class ReplyBodyType extends Type
{

    /**
     * @var \rklandesverband\ews\API\Type\ReplyBodyType\LangAType
     */
    protected $lang = null;

    /**
     * @var string
     */
    protected $message = null;
}
