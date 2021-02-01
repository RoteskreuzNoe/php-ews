<?php

namespace rklandesverband\ews\API\Type;

use rklandesverband\ews\API\Type;

/**
 * Class representing NonEmptyArrayOfFolderChangeDescriptionsType
 *
 *
 * XSD Type: NonEmptyArrayOfFolderChangeDescriptionsType
 *
 * @method NonEmptyArrayOfFolderChangeDescriptionsType addAppendToFolderField(AppendToFolderFieldType $appendToFolderField)
 * @method AppendToFolderFieldType[] getAppendToFolderField()
 * @method NonEmptyArrayOfFolderChangeDescriptionsType setAppendToFolderField(array $appendToFolderField)
 * @method NonEmptyArrayOfFolderChangeDescriptionsType addSetFolderField(SetFolderFieldType $setFolderField)
 * @method SetFolderFieldType[] getSetFolderField()
 * @method NonEmptyArrayOfFolderChangeDescriptionsType setSetFolderField(array $setFolderField)
 * @method NonEmptyArrayOfFolderChangeDescriptionsType addDeleteFolderField(DeleteFolderFieldType $deleteFolderField)
 * @method DeleteFolderFieldType[] getDeleteFolderField()
 * @method NonEmptyArrayOfFolderChangeDescriptionsType setDeleteFolderField(array $deleteFolderField)
 */
class NonEmptyArrayOfFolderChangeDescriptionsType extends Type
{

    /**
     * @var \rklandesverband\ews\API\Type\AppendToFolderFieldType[]
     */
    protected $appendToFolderField = null;

    /**
     * @var \rklandesverband\ews\API\Type\SetFolderFieldType[]
     */
    protected $setFolderField = null;

    /**
     * @var \rklandesverband\ews\API\Type\DeleteFolderFieldType[]
     */
    protected $deleteFolderField = null;
}
