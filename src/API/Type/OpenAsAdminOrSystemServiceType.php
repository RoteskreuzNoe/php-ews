<?php

namespace rklandesverband\ews\API\Type;

use rklandesverband\ews\API\Type;

/**
 * Class representing OpenAsAdminOrSystemServiceType
 *
 *
 * XSD Type: OpenAsAdminOrSystemServiceType
 *
 * @method string getLogonType()
 * @method OpenAsAdminOrSystemServiceType setLogonType(string $logonType)
 * @method ConnectingSIDType getConnectingSID()
 * @method OpenAsAdminOrSystemServiceType setConnectingSID(ConnectingSIDType $connectingSID)
 */
class OpenAsAdminOrSystemServiceType extends Type
{

    /**
     * @var string
     */
    protected $logonType = null;

    /**
     * @var \rklandesverband\ews\API\Type\ConnectingSIDType
     */
    protected $connectingSID = null;
}
