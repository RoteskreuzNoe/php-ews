<?php

namespace rklandesverband\ews\API\Type;

/**
 * Class representing PostReplyItemType
 *
 *
 * XSD Type: PostReplyItemType
 *
 * @method BodyType getNewBodyContent()
 * @method PostReplyItemType setNewBodyContent(BodyType $newBodyContent)
 */
class PostReplyItemType extends PostReplyItemBaseType
{

    /**
     * @var \rklandesverband\ews\API\Type\BodyType
     */
    protected $newBodyContent = null;
}
