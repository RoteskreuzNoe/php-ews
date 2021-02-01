<?php

namespace rklandesverband\ews\API\Message;

use rklandesverband\ews\API\Message;

/**
 * Class representing GetUserOofSettingsResponseType
 *
 *
 * XSD Type: GetUserOofSettingsResponse
 *
 * @method ResponseMessageType getResponseMessage()
 * @method GetUserOofSettingsResponseType setResponseMessage(ResponseMessageType $responseMessage)
 * @method \rklandesverband\ews\API\Type\OofSettings getOofSettings()
 * @method GetUserOofSettingsResponseType setOofSettings(\rklandesverband\ews\API\Type\OofSettings $oofSettings)
 * @method string getAllowExternalOof()
 * @method GetUserOofSettingsResponseType setAllowExternalOof(string $allowExternalOof)
 */
class GetUserOofSettingsResponseType extends Message
{

    /**
     * @var \rklandesverband\ews\API\Message\ResponseMessageType
     */
    protected $responseMessage = null;

    /**
     * @var \rklandesverband\ews\API\Type\OofSettings
     */
    protected $oofSettings = null;

    /**
     * @var string
     */
    protected $allowExternalOof = null;
}
