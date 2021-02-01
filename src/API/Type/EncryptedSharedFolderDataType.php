<?php

namespace rklandesverband\ews\API\Type;

use rklandesverband\ews\API\Type;

/**
 * Class representing EncryptedSharedFolderDataType
 *
 *
 * XSD Type: EncryptedSharedFolderDataType
 *
 * @method EncryptedDataContainerType getToken()
 * @method EncryptedSharedFolderDataType setToken(EncryptedDataContainerType $token)
 * @method EncryptedDataContainerType getData()
 * @method EncryptedSharedFolderDataType setData(EncryptedDataContainerType $data)
 */
class EncryptedSharedFolderDataType extends Type
{

    /**
     * @var \rklandesverband\ews\API\Type\EncryptedDataContainerType
     */
    protected $token = null;

    /**
     * @var \rklandesverband\ews\API\Type\EncryptedDataContainerType
     */
    protected $data = null;
}
