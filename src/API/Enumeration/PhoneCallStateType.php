<?php
/**
 * Contains \rklandesverband\ews\API\Enumeration\PhoneCallStateType.
 */


namespace rklandesverband\ews\API\Enumeration;

use rklandesverband\ews\API\Enumeration;

/**
 * Class representing PhoneCallStateType
 *
 *
 * XSD Type: PhoneCallStateType
 */
class PhoneCallStateType extends Enumeration
{

    const ALERTED = 'Alerted';

    const CONNECTED = 'Connected';

    const CONNECTING = 'Connecting';

    const DISCONNECTED = 'Disconnected';

    const FORWARDING = 'Forwarding';

    const IDLE = 'Idle';

    const INCOMING = 'Incoming';

    const TRANSFERRING = 'Transferring';
}
