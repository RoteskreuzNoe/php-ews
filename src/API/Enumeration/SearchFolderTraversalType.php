<?php
/**
 * Contains \rklandesverband\ews\API\Enumeration\SearchFolderTraversalType.
 */


namespace rklandesverband\ews\API\Enumeration;

use rklandesverband\ews\API\Enumeration;

/**
 * Class representing SearchFolderTraversalType
 *
 * Types of sub-tree traversal for deletion and enumeration
 * XSD Type: SearchFolderTraversalType
 */
class SearchFolderTraversalType extends Enumeration
{

    const DEEP = 'Deep';

    const SHALLOW = 'Shallow';
}
