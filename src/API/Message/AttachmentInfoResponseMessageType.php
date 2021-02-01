<?php

namespace rklandesverband\ews\API\Message;

/**
 * Class representing AttachmentInfoResponseMessageType
 *
 *
 * XSD Type: AttachmentInfoResponseMessageType
 *
 * @method \rklandesverband\ews\API\Type\ArrayOfAttachmentsType getAttachments()
 * @method AttachmentInfoResponseMessageType setAttachments(\rklandesverband\ews\API\Type\ArrayOfAttachmentsType $attachments)
 */
class AttachmentInfoResponseMessageType extends ResponseMessageType
{

    /**
     * @var \rklandesverband\ews\API\Type\ArrayOfAttachmentsType
     */
    protected $attachments = null;
}
