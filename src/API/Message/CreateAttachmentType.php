<?php

namespace rklandesverband\ews\API\Message;

/**
 * Class representing CreateAttachmentType
 *
 *
 * XSD Type: CreateAttachmentType
 *
 * @method \rklandesverband\ews\API\Type\ItemIdType getParentItemId()
 * @method CreateAttachmentType setParentItemId(\rklandesverband\ews\API\Type\ItemIdType $parentItemId)
 * @method \rklandesverband\ews\API\Type\NonEmptyArrayOfAttachmentsType getAttachments()
 * @method CreateAttachmentType setAttachments(\rklandesverband\ews\API\Type\NonEmptyArrayOfAttachmentsType $attachments)
 */
class CreateAttachmentType extends BaseRequestType
{

    /**
     * @var \rklandesverband\ews\API\Type\ItemIdType
     */
    protected $parentItemId = null;

    /**
     * @var \rklandesverband\ews\API\Type\NonEmptyArrayOfAttachmentsType
     */
    protected $attachments = null;
}
