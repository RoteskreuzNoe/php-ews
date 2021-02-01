<?php

namespace rklandesverband\ews\API\Message;

/**
 * Class representing GetSharingMetadataResponseMessageType
 *
 *
 * XSD Type: GetSharingMetadataResponseMessageType
 *
 * @method GetSharingMetadataResponseMessageType addEncryptedSharedFolderDataCollection(\rklandesverband\ews\API\Type\EncryptedSharedFolderDataType $encryptedSharedFolderDataCollection)
 * @method \rklandesverband\ews\API\Type\EncryptedSharedFolderDataType[] getEncryptedSharedFolderDataCollection()
 * @method GetSharingMetadataResponseMessageType setEncryptedSharedFolderDataCollection(array $encryptedSharedFolderDataCollection)
 * @method GetSharingMetadataResponseMessageType addInvalidRecipients(\rklandesverband\ews\API\Type\InvalidRecipientType $invalidRecipients)
 * @method \rklandesverband\ews\API\Type\InvalidRecipientType[] getInvalidRecipients()
 * @method GetSharingMetadataResponseMessageType setInvalidRecipients(array $invalidRecipients)
 */
class GetSharingMetadataResponseMessageType extends ResponseMessageType
{

    /**
     * @var \rklandesverband\ews\API\Type\EncryptedSharedFolderDataType[]
     */
    protected $encryptedSharedFolderDataCollection = null;

    /**
     * @var \rklandesverband\ews\API\Type\InvalidRecipientType[]
     */
    protected $invalidRecipients = null;
}
