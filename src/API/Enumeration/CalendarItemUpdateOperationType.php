<?php
/**
 * Contains \rklandesverband\ews\API\Enumeration\CalendarItemUpdateOperationType.
 */


namespace rklandesverband\ews\API\Enumeration;

use rklandesverband\ews\API\Enumeration;

/**
 * Class representing CalendarItemUpdateOperationType
 *
 *
 * XSD Type: CalendarItemUpdateOperationType
 */
class CalendarItemUpdateOperationType extends Enumeration
{

    const SEND_ONLY_TO_ALL = 'SendOnlyToAll';

    const SEND_ONLY_TO_CHANGED = 'SendOnlyToChanged';

    const SEND_TO_ALL_AND_SAVE_COPY = 'SendToAllAndSaveCopy';

    const SEND_TO_CHANGED_AND_SAVE_COPY = 'SendToChangedAndSaveCopy';

    const SEND_TO_NONE = 'SendToNone';
}
