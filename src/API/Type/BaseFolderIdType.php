<?php

namespace rklandesverband\ews\API\Type;

use rklandesverband\ews\API\Exception;
use rklandesverband\ews\API\Type;

/**
 * Class representing BaseFolderIdType
 *
 * Utility type which should never appear in user documents
 * XSD Type: BaseFolderIdType
 */
class BaseFolderIdType extends Type
{
    public function toArray($getOuterArray = false)
    {
        throw new Exception('Cannot use BaseFolderIdType directly');
    }
}
