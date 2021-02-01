<?php

namespace rklandesverband\ews\API\Message;

/**
 * Class representing DeleteAttachmentType
 *
 *
 * XSD Type: DeleteAttachmentType
 *
 * @method DeleteAttachmentType addAttachmentIds(\rklandesverband\ews\API\Type\RequestAttachmentIdType $attachmentIds)
 * @method \rklandesverband\ews\API\Type\RequestAttachmentIdType[] getAttachmentIds()
 * @method DeleteAttachmentType setAttachmentIds(array $attachmentIds)
 */
class DeleteAttachmentType extends BaseRequestType
{

    /**
     * @var \rklandesverband\ews\API\Type\RequestAttachmentIdType[]
     */
    protected $attachmentIds = null;
}
