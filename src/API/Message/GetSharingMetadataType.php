<?php

namespace rklandesverband\ews\API\Message;

/**
 * Class representing GetSharingMetadataType
 *
 *
 * XSD Type: GetSharingMetadataType
 *
 * @method \rklandesverband\ews\API\Type\FolderIdType getIdOfFolderToShare()
 * @method GetSharingMetadataType setIdOfFolderToShare(\rklandesverband\ews\API\Type\FolderIdType $idOfFolderToShare)
 * @method string getSenderSmtpAddress()
 * @method GetSharingMetadataType setSenderSmtpAddress(string $senderSmtpAddress)
 * @method GetSharingMetadataType addRecipients(string $recipients)
 * @method string[] getRecipients()
 * @method GetSharingMetadataType setRecipients(array $recipients)
 */
class GetSharingMetadataType extends BaseRequestType
{

    /**
     * @var \rklandesverband\ews\API\Type\FolderIdType
     */
    protected $idOfFolderToShare = null;

    /**
     * @var string
     */
    protected $senderSmtpAddress = null;

    /**
     * @var string[]
     */
    protected $recipients = null;
}
