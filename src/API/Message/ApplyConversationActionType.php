<?php

namespace rklandesverband\ews\API\Message;

/**
 * Class representing ApplyConversationActionType
 *
 *
 * XSD Type: ApplyConversationActionType
 *
 * @method ApplyConversationActionType addConversationActions(\rklandesverband\ews\API\Type\ConversationActionType $conversationActions)
 * @method \rklandesverband\ews\API\Type\ConversationActionType[] getConversationActions()
 * @method ApplyConversationActionType setConversationActions(array $conversationActions)
 */
class ApplyConversationActionType extends BaseRequestType
{

    /**
     * @var \rklandesverband\ews\API\Type\ConversationActionType[]
     */
    protected $conversationActions = null;
}
