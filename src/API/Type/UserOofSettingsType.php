<?php

namespace rklandesverband\ews\API\Type;

use rklandesverband\ews\API\Type;

/**
 * Class representing UserOofSettingsType
 *
 *
 * XSD Type: UserOofSettings
 *
 * @method string getOofState()
 * @method UserOofSettingsType setOofState(string $oofState)
 * @method string getExternalAudience()
 * @method UserOofSettingsType setExternalAudience(string $externalAudience)
 * @method DurationType getDuration()
 * @method UserOofSettingsType setDuration(DurationType $duration)
 * @method ReplyBodyType getInternalReply()
 * @method UserOofSettingsType setInternalReply(ReplyBodyType $internalReply)
 * @method ReplyBodyType getExternalReply()
 * @method UserOofSettingsType setExternalReply(ReplyBodyType $externalReply)
 */
class UserOofSettingsType extends Type
{

    /**
     * @var string
     */
    protected $oofState = null;

    /**
     * @var string
     */
    protected $externalAudience = null;

    /**
     * @var \rklandesverband\ews\API\Type\DurationType
     */
    protected $duration = null;

    /**
     * @var \rklandesverband\ews\API\Type\ReplyBodyType
     */
    protected $internalReply = null;

    /**
     * @var \rklandesverband\ews\API\Type\ReplyBodyType
     */
    protected $externalReply = null;
}
