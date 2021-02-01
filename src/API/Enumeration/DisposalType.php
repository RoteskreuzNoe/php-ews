<?php
/**
 * Contains \rklandesverband\ews\API\Enumeration\DisposalType.
 */

namespace rklandesverband\ews\API\Enumeration;

use rklandesverband\ews\API\Enumeration;

/**
 * Class representing DisposalType
 *
 *
 * XSD Type: DisposalType
 */
class DisposalType extends Enumeration
{
    const HARD_DELETE = 'HardDelete';

    const MOVE_TO_DELETED_ITEMS = 'MoveToDeletedItems';

    const SOFT_DELETE = 'SoftDelete';
}
