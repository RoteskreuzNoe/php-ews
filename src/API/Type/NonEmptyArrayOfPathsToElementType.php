<?php

namespace rklandesverband\ews\API\Type;

use rklandesverband\ews\API\Type;

/**
 * Class representing NonEmptyArrayOfPathsToElementType
 *
 *
 * XSD Type: NonEmptyArrayOfPathsToElementType
 *
 * @method NonEmptyArrayOfPathsToElementType addFieldURI(FieldURI $fieldURI)
 * @method FieldURI[] getFieldURI()
 * @method NonEmptyArrayOfPathsToElementType setFieldURI(array $fieldURI)
 * @method NonEmptyArrayOfPathsToElementType addIndexedFieldURI(IndexedFieldURI $indexedFieldURI)
 * @method IndexedFieldURI[] getIndexedFieldURI()
 * @method NonEmptyArrayOfPathsToElementType setIndexedFieldURI(array $indexedFieldURI)
 * @method NonEmptyArrayOfPathsToElementType addExtendedFieldURI(ExtendedFieldURI $extendedFieldURI)
 * @method ExtendedFieldURI[] getExtendedFieldURI()
 * @method NonEmptyArrayOfPathsToElementType setExtendedFieldURI(array $extendedFieldURI)
 */
class NonEmptyArrayOfPathsToElementType extends Type
{

    /**
     * @var \rklandesverband\ews\API\Type\FieldURI[]
     */
    protected $fieldURI = null;

    /**
     * @var \rklandesverband\ews\API\Type\IndexedFieldURI[]
     */
    protected $indexedFieldURI = null;

    /**
     * @var \rklandesverband\ews\API\Type\ExtendedFieldURI[]
     */
    protected $extendedFieldURI = null;
}
