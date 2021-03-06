<?php

namespace rklandesverband\ews\API\Type;

use rklandesverband\ews\API\Type;

/**
 * Class representing FieldOrderType
 *
 *
 * XSD Type: FieldOrderType
 *
 * @method string getOrder()
 * @method FieldOrderType setOrder(string $order)
 * @method FieldOrderType addFieldURI(FieldURI $fieldURI)
 * @method FieldURI[] getFieldURI()
 * @method FieldOrderType setFieldURI(array $fieldURI)
 * @method FieldOrderType addIndexedFieldURI(IndexedFieldURI $indexedFieldURI)
 * @method IndexedFieldURI[] getIndexedFieldURI()
 * @method FieldOrderType setIndexedFieldURI(array $indexedFieldURI)
 * @method FieldOrderType addExtendedFieldURI(ExtendedFieldURI $extendedFieldURI)
 * @method ExtendedFieldURI[] getExtendedFieldURI()
 * @method FieldOrderType setExtendedFieldURI(array $extendedFieldURI)
 */
class FieldOrderType extends Type
{

    /**
     * @var string
     */
    protected $order = null;

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
