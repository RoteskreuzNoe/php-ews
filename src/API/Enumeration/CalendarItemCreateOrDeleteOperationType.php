<?php
/**
 * Contains \rklandesverband\ews\API\Enumeration\CalendarItemCreateOrDeleteOperationType.
 */


namespace rklandesverband\ews\API\Enumeration;

use rklandesverband\ews\API\Enumeration;

/**
 * Class representing CalendarItemCreateOrDeleteOperationType
 *
 *
 * XSD Type: CalendarItemCreateOrDeleteOperationType
 */
class CalendarItemCreateOrDeleteOperationType extends Enumeration
{

    const SEND_ONLY_TO_ALL = 'SendOnlyToAll';

    const SEND_TO_ALL_AND_SAVE_COPY = 'SendToAllAndSaveCopy';

    const SEND_TO_NONE = 'SendToNone';
}
