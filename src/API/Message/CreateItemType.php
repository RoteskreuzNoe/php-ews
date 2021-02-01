<?php

namespace rklandesverband\ews\API\Message;

/**
 * Class representing CreateItemType
 *
 *
 * XSD Type: CreateItemType
 *
 * @method string getMessageDisposition()
 * @method CreateItemType setMessageDisposition(string $messageDisposition)
 * @method string getSendMeetingInvitations()
 * @method CreateItemType setSendMeetingInvitations(string $sendMeetingInvitations)
 * @method \rklandesverband\ews\API\Type\TargetFolderIdType getSavedItemFolderId()
 * @method CreateItemType setSavedItemFolderId(\rklandesverband\ews\API\Type\TargetFolderIdType $savedItemFolderId)
 * @method \rklandesverband\ews\API\Type\NonEmptyArrayOfAllItemsType getItems()
 * @method CreateItemType setItems(\rklandesverband\ews\API\Type\NonEmptyArrayOfAllItemsType $items)
 */
class CreateItemType extends BaseRequestType
{

    /**
     * @var string
     */
    protected $messageDisposition = null;

    /**
     * @var string
     */
    protected $sendMeetingInvitations = null;

    /**
     * @var \rklandesverband\ews\API\Type\TargetFolderIdType
     */
    protected $savedItemFolderId = null;

    /**
     * @var \rklandesverband\ews\API\Type\NonEmptyArrayOfAllItemsType
     */
    protected $items = null;
}
