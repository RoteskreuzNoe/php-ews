<?php

namespace rklandesverband\ews\API\Message;

/**
 * Class representing GetAttachmentType
 *
 *
 * XSD Type: GetAttachmentType
 *
 * @method \rklandesverband\ews\API\Type\AttachmentResponseShapeType getAttachmentShape()
 * @method GetAttachmentType setAttachmentShape(\rklandesverband\ews\API\Type\AttachmentResponseShapeType $attachmentShape)
 * @method GetAttachmentType addAttachmentIds(\rklandesverband\ews\API\Type\RequestAttachmentIdType $attachmentIds)
 * @method \rklandesverband\ews\API\Type\RequestAttachmentIdType[] getAttachmentIds()
 * @method GetAttachmentType setAttachmentIds(array $attachmentIds)
 */
class GetAttachmentType extends BaseRequestType
{

    /**
     * @var \rklandesverband\ews\API\Type\AttachmentResponseShapeType
     */
    protected $attachmentShape = null;

    /**
     * @var \rklandesverband\ews\API\Type\RequestAttachmentIdType[]
     */
    protected $attachmentIds = null;
}
