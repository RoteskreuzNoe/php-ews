<?php
/**
 * Contains \rklandesverband\ews\API\Enumeration\TaskDelegateStateType.
 */


namespace rklandesverband\ews\API\Enumeration;

use rklandesverband\ews\API\Enumeration;

/**
 * Class representing TaskDelegateStateType
 *
 *
 * XSD Type: TaskDelegateStateType
 */
class TaskDelegateStateType extends Enumeration
{

    const ACCEPTED = 'Accepted';

    const DECLINED = 'Declined';

    const MAX = 'Max';

    const NO_MATCH = 'NoMatch';

    const OWN_NEW = 'OwnNew';

    const OWNED = 'Owned';
}
