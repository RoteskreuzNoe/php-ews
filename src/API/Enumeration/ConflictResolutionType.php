<?php
/**
 * Contains \rklandesverband\ews\API\Enumeration\ConflictResolutionType.
 */


namespace rklandesverband\ews\API\Enumeration;

use rklandesverband\ews\API\Enumeration;

/**
 * Class representing ConflictResolutionType
 *
 * Type of conflict resolution to attempt during update
 * XSD Type: ConflictResolutionType
 */
class ConflictResolutionType extends Enumeration
{

    const ALWAYS_OVERWRITE = 'AlwaysOverwrite';

    const AUTO_RESOLVE = 'AutoResolve';

    const NEVER_OVERWRITE = 'NeverOverwrite';
}
