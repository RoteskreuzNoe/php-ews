<?php
/**
 * Contains \rklandesverband\ews\API\Enumeration\ConversationActionTypeType.
 */


namespace rklandesverband\ews\API\Enumeration;

use rklandesverband\ews\API\Enumeration;

/**
 * Class representing ConversationActionTypeType
 *
 *
 * XSD Type: ConversationActionTypeType
 */
class ConversationActionTypeType extends Enumeration
{

    const ALWAYS_CATEGORIZE = 'AlwaysCategorize';

    const ALWAYS_DELETE = 'AlwaysDelete';

    const ALWAYS_MOVE = 'AlwaysMove';

    const COPY = 'Copy';

    const DELETE = 'Delete';

    const MOVE = 'Move';

    const SET_READ_STATE = 'SetReadState';
}
