<?php

namespace rklandesverband\ews\API\Type;

use rklandesverband\ews\API\Type;

/**
 * Class representing UserConfigurationDictionaryEntryType
 *
 *
 * XSD Type: UserConfigurationDictionaryEntryType
 *
 * @method UserConfigurationDictionaryObjectType getDictionaryKey()
 * @method UserConfigurationDictionaryEntryType setDictionaryKey(UserConfigurationDictionaryObjectType $dictionaryKey)
 * @method UserConfigurationDictionaryObjectType getDictionaryValue()
 * @method UserConfigurationDictionaryEntryType setDictionaryValue(UserConfigurationDictionaryObjectType $dictionaryValue)
 */
class UserConfigurationDictionaryEntryType extends Type
{

    /**
     * @var \rklandesverband\ews\API\Type\UserConfigurationDictionaryObjectType
     */
    protected $dictionaryKey = null;

    /**
     * @var \rklandesverband\ews\API\Type\UserConfigurationDictionaryObjectType
     */
    protected $dictionaryValue = null;
}
