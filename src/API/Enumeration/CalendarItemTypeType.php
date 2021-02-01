<?php
/**
 * Contains \rklandesverband\ews\API\Enumeration\CalendarItemTypeType.
 */


namespace rklandesverband\ews\API\Enumeration;

use rklandesverband\ews\API\Enumeration;

/**
 * Class representing CalendarItemTypeType
 *
 *
 * XSD Type: CalendarItemTypeType
 */
class CalendarItemTypeType extends Enumeration
{

    const EXCEPTION = 'Exception';

    const OCCURRENCE = 'Occurrence';

    const RECURRING_MASTER = 'RecurringMaster';

    const SINGLE = 'Single';
}
