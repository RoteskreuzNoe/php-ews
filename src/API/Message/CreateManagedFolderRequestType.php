<?php

namespace rklandesverband\ews\API\Message;

/**
 * Class representing CreateManagedFolderRequestType
 *
 *
 * XSD Type: CreateManagedFolderRequestType
 *
 * @method CreateManagedFolderRequestType addFolderNames(string $folderNames)
 * @method string[] getFolderNames()
 * @method CreateManagedFolderRequestType setFolderNames(array $folderNames)
 * @method \rklandesverband\ews\API\Type\EmailAddressType getMailbox()
 * @method CreateManagedFolderRequestType setMailbox(\rklandesverband\ews\API\Type\EmailAddressType $mailbox)
 */
class CreateManagedFolderRequestType extends BaseRequestType
{

    /**
     * @var string[]
     */
    protected $folderNames = null;

    /**
     * @var \rklandesverband\ews\API\Type\EmailAddressType
     */
    protected $mailbox = null;
}
