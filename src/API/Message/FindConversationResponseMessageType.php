<?php

namespace rklandesverband\ews\API\Message;

/**
 * Class representing FindConversationResponseMessageType
 *
 *
 * XSD Type: FindConversationResponseMessageType
 *
 * @method FindConversationResponseMessageType addConversations(\rklandesverband\ews\API\Type\ConversationType $conversations)
 * @method \rklandesverband\ews\API\Type\ConversationType[] getConversations()
 * @method FindConversationResponseMessageType setConversations(array $conversations)
 */
class FindConversationResponseMessageType extends ResponseMessageType
{

    /**
     * @var \rklandesverband\ews\API\Type\ConversationType[]
     */
    protected $conversations = null;
}
