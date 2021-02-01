<?php

namespace rklandesverband\ews\API\Type;

use rklandesverband\ews\API\Type;

/**
 * Class representing SyncFolderItemsCreateOrUpdateType
 *
 *
 * XSD Type: SyncFolderItemsCreateOrUpdateType
 *
 * @method ItemType getItem()
 * @method SyncFolderItemsCreateOrUpdateType setItem(ItemType $item)
 * @method MessageType getMessage()
 * @method SyncFolderItemsCreateOrUpdateType setMessage(MessageType $message)
 * @method CalendarItemType getCalendarItem()
 * @method SyncFolderItemsCreateOrUpdateType setCalendarItem(CalendarItemType $calendarItem)
 * @method ContactItemType getContact()
 * @method SyncFolderItemsCreateOrUpdateType setContact(ContactItemType $contact)
 * @method DistributionListType getDistributionList()
 * @method SyncFolderItemsCreateOrUpdateType setDistributionList(DistributionListType $distributionList)
 * @method MeetingMessageType getMeetingMessage()
 * @method SyncFolderItemsCreateOrUpdateType setMeetingMessage(MeetingMessageType $meetingMessage)
 * @method MeetingRequestMessageType getMeetingRequest()
 * @method SyncFolderItemsCreateOrUpdateType setMeetingRequest(MeetingRequestMessageType $meetingRequest)
 * @method MeetingResponseMessageType getMeetingResponse()
 * @method SyncFolderItemsCreateOrUpdateType setMeetingResponse(MeetingResponseMessageType $meetingResponse)
 * @method MeetingCancellationMessageType getMeetingCancellation()
 * @method SyncFolderItemsCreateOrUpdateType setMeetingCancellation(MeetingCancellationMessageType $meetingCancellation)
 * @method TaskType getTask()
 * @method SyncFolderItemsCreateOrUpdateType setTask(TaskType $task)
 * @method PostItemType getPostItem()
 * @method SyncFolderItemsCreateOrUpdateType setPostItem(PostItemType $postItem)
 */
class SyncFolderItemsCreateOrUpdateType extends Type
{

    /**
     * @var \rklandesverband\ews\API\Type\ItemType
     */
    protected $item = null;

    /**
     * @var \rklandesverband\ews\API\Type\MessageType
     */
    protected $message = null;

    /**
     * @var \rklandesverband\ews\API\Type\CalendarItemType
     */
    protected $calendarItem = null;

    /**
     * @var \rklandesverband\ews\API\Type\ContactItemType
     */
    protected $contact = null;

    /**
     * @var \rklandesverband\ews\API\Type\DistributionListType
     */
    protected $distributionList = null;

    /**
     * @var \rklandesverband\ews\API\Type\MeetingMessageType
     */
    protected $meetingMessage = null;

    /**
     * @var \rklandesverband\ews\API\Type\MeetingRequestMessageType
     */
    protected $meetingRequest = null;

    /**
     * @var \rklandesverband\ews\API\Type\MeetingResponseMessageType
     */
    protected $meetingResponse = null;

    /**
     * @var \rklandesverband\ews\API\Type\MeetingCancellationMessageType
     */
    protected $meetingCancellation = null;

    /**
     * @var \rklandesverband\ews\API\Type\TaskType
     */
    protected $task = null;

    /**
     * @var \rklandesverband\ews\API\Type\PostItemType
     */
    protected $postItem = null;
}
