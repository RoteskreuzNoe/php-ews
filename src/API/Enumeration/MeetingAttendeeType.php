<?php
/**
 * Contains \rklandesverband\ews\API\Enumeration\MeetingAttendeeType.
 */


namespace rklandesverband\ews\API\Enumeration;

use rklandesverband\ews\API\Enumeration;

/**
 * Class representing MeetingAttendeeType
 *
 *
 * XSD Type: MeetingAttendeeType
 */
class MeetingAttendeeType extends Enumeration
{

    const OPTIONAL = 'Optional';

    const ORGANIZER = 'Organizer';

    const REQUIRED = 'Required';

    const RESOURCE = 'Resource';

    const ROOM = 'Room';
}
