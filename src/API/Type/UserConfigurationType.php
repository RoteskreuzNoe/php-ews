<?php

namespace rklandesverband\ews\API\Type;

use rklandesverband\ews\API\Type;

/**
 * Class representing UserConfigurationType
 *
 *
 * XSD Type: UserConfigurationType
 *
 * @method UserConfigurationNameType getUserConfigurationName()
 * @method UserConfigurationType setUserConfigurationName(UserConfigurationNameType $userConfigurationName)
 * @method ItemIdType getItemId()
 * @method UserConfigurationType setItemId(ItemIdType $itemId)
 * @method UserConfigurationType addDictionary(UserConfigurationDictionaryEntryType $dictionary)
 * @method UserConfigurationDictionaryEntryType[] getDictionary()
 * @method UserConfigurationType setDictionary(array $dictionary)
 * @method string getXmlData()
 * @method UserConfigurationType setXmlData(string $xmlData)
 * @method string getBinaryData()
 * @method UserConfigurationType setBinaryData(string $binaryData)
 */
class UserConfigurationType extends Type
{

    /**
     * @var \rklandesverband\ews\API\Type\UserConfigurationNameType
     */
    protected $userConfigurationName = null;

    /**
     * @var \rklandesverband\ews\API\Type\ItemIdType
     */
    protected $itemId = null;

    /**
     * @var \rklandesverband\ews\API\Type\UserConfigurationDictionaryEntryType[]
     */
    protected $dictionary = null;

    /**
     * @var string
     */
    protected $xmlData = null;

    /**
     * @var string
     */
    protected $binaryData = null;
}
