<?php

namespace rklandesverband\ews\API\Type;

use rklandesverband\ews\API\Type;

/**
 * Class representing ArrayOfAttachmentsType
 *
 *
 * XSD Type: ArrayOfAttachmentsType
 *
 * @method ArrayOfAttachmentsType addItemAttachment(ItemAttachmentType $itemAttachment)
 * @method ItemAttachmentType[] getItemAttachment()
 * @method ArrayOfAttachmentsType setItemAttachment(array $itemAttachment)
 * @method ArrayOfAttachmentsType addFileAttachment(FileAttachmentType $fileAttachment)
 * @method FileAttachmentType[] getFileAttachment()
 * @method ArrayOfAttachmentsType setFileAttachment(array $fileAttachment)
 */
class ArrayOfAttachmentsType extends Type
{

    /**
     * @var \rklandesverband\ews\API\Type\ItemAttachmentType[]
     */
    protected $itemAttachment = null;

    /**
     * @var \rklandesverband\ews\API\Type\FileAttachmentType[]
     */
    protected $fileAttachment = null;
}
