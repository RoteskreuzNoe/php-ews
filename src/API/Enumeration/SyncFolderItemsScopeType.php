<?php
/**
 * Contains \rklandesverband\ews\API\Enumeration\SyncFolderItemsScopeType.
 */


namespace rklandesverband\ews\API\Enumeration;

use rklandesverband\ews\API\Enumeration;

/**
 * Class representing SyncFolderItemsScopeType
 *
 *
 * XSD Type: SyncFolderItemsScopeType
 */
class SyncFolderItemsScopeType extends Enumeration
{

    const NORMAL = 'NormalItems';

    const NORMAL_AND_ASSOCIATED = 'NormalAndAssociatedItems';

    const NORMAL_ITEMS = 'NormalItems';

    const NORMAL_AND_ASSOCIATED_ITEMS = 'NormalAndAssociatedItems';
}
