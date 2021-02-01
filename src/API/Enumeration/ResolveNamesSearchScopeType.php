<?php
/**
 * Contains \rklandesverband\ews\API\Enumeration\ResolveNamesSearchScopeType.
 */


namespace rklandesverband\ews\API\Enumeration;

use rklandesverband\ews\API\Enumeration;

/**
 * Class representing ResolveNamesSearchScopeType
 *
 *
 * XSD Type: ResolveNamesSearchScopeType
 */
class ResolveNamesSearchScopeType extends Enumeration
{

    const ACTIVE_DIRECTORY = 'ActiveDirectory';

    const ACTIVE_DIRECTORY_CONTACTS = 'ActiveDirectoryContacts';

    const CONTACTS = 'Contacts';

    const CONTACTS_ACTIVE_DIRECTORY = 'ContactsActiveDirectory';
}
