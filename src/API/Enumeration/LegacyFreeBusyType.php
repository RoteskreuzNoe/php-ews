<?php
/**
 * Contains \rklandesverband\ews\API\Enumeration\LegacyFreeBusyType.
 */


namespace rklandesverband\ews\API\Enumeration;

use rklandesverband\ews\API\Enumeration;

/**
 * Class representing LegacyFreeBusyType
 *
 *
 * XSD Type: LegacyFreeBusyType
 */
class LegacyFreeBusyType extends Enumeration
{

    const BUSY = 'Busy';

    const FREE = 'Free';

    const NO_DATA = 'NoData';

    const OUT_OF_OFFICE = 'OOF';

    const TENTATIVE = 'Tentative';

    const WORKING_ELSEWHERE = 'WorkingElsewhere';

    const OOF = 'OOF';
}
