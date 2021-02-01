<?php
/**
 * Contains \rklandesverband\ews\API\Enumeration\DeliverMeetingRequestsType.
 */


namespace rklandesverband\ews\API\Enumeration;

use rklandesverband\ews\API\Enumeration;

/**
 * Class representing DeliverMeetingRequestsType
 *
 *
 * XSD Type: DeliverMeetingRequestsType
 */
class DeliverMeetingRequestsType extends Enumeration
{

    const DELEGATES_AND_ME = 'DelegatesAndMe';

    const DELEGATES_AND_SEND_INFO_TO_ME = 'DelegatesAndSendInformationToMe';

    const DELEGATES_ONLY = 'DelegatesOnly';

    const NO_FORWARD = 'NoForward';

    const DELEGATES_AND_SEND_INFORMATION_TO_ME = 'DelegatesAndSendInformationToMe';
}
