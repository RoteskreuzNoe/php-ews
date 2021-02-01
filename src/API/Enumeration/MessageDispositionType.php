<?php
/**
 * Contains \rklandesverband\ews\API\Enumeration\MessageDispositionType.
 */


namespace rklandesverband\ews\API\Enumeration;

use rklandesverband\ews\API\Enumeration;

/**
 * Class representing MessageDispositionType
 *
 *
 * XSD Type: MessageDispositionType
 */
class MessageDispositionType extends Enumeration
{

    const SAVE_ONLY = 'SaveOnly';

    const SEND_AND_SAVE_COPY = 'SendAndSaveCopy';

    const SEND_ONLY = 'SendOnly';
}
