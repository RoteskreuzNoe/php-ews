<?php
/**
 * Contains \rklandesverband\ews\API\Enumeration\FreeBusyViewType.
 */


namespace rklandesverband\ews\API\Enumeration;

use rklandesverband\ews\API\Enumeration;

/**
 * Class representing FreeBusyViewType
 *
 *
 * XSD Type: FreeBusyViewType
 */
class FreeBusyViewType extends Enumeration
{

    const DETAILED = 'Detailed';

    const DETAILED_MERGED = 'DetailedMerged';

    const FREE_BUSY = 'FreeBusy';

    const FREE_BUSY_MERGED = 'FreeBusyMerged';

    const MERGED_ONLY = 'MergedOnly';

    const NONE = 'None';
}
