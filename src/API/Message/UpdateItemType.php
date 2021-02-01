<?php

namespace rklandesverband\ews\API\Message;

/**
 * Class representing UpdateItemType
 *
 *
 * XSD Type: UpdateItemType
 *
 * @method string getConflictResolution()
 * @method UpdateItemType setConflictResolution(string $conflictResolution)
 * @method string getMessageDisposition()
 * @method UpdateItemType setMessageDisposition(string $messageDisposition)
 * @method string getSendMeetingInvitationsOrCancellations()
 * @method UpdateItemType setSendMeetingInvitationsOrCancellations(string $sendMeetingInvitationsOrCancellations)
 * @method \rklandesverband\ews\API\Type\TargetFolderIdType getSavedItemFolderId()
 * @method UpdateItemType setSavedItemFolderId(\rklandesverband\ews\API\Type\TargetFolderIdType $savedItemFolderId)
 * @method UpdateItemType addItemChanges(\rklandesverband\ews\API\Type\ItemChangeType $itemChanges)
 * @method \rklandesverband\ews\API\Type\ItemChangeType[] getItemChanges()
 * @method UpdateItemType setItemChanges(array $itemChanges)
 */
class UpdateItemType extends BaseRequestType
{

    /**
     * @var string
     */
    protected $conflictResolution = null;

    /**
     * @var string
     */
    protected $messageDisposition = null;

    /**
     * @var string
     */
    protected $sendMeetingInvitationsOrCancellations = null;

    /**
     * @var \rklandesverband\ews\API\Type\TargetFolderIdType
     */
    protected $savedItemFolderId = null;

    /**
     * @var \rklandesverband\ews\API\Type\ItemChangeType[]
     */
    protected $itemChanges = null;
}
