<?php

namespace rklandesverband\ews\API\Type;

/**
 * Class representing AppendToItemFieldType
 *
 *
 * XSD Type: AppendToItemFieldType
 *
 * @method ItemType getItem()
 * @method AppendToItemFieldType setItem(ItemType $item)
 * @method MessageType getMessage()
 * @method AppendToItemFieldType setMessage(MessageType $message)
 * @method CalendarItemType getCalendarItem()
 * @method AppendToItemFieldType setCalendarItem(CalendarItemType $calendarItem)
 * @method ContactItemType getContact()
 * @method AppendToItemFieldType setContact(ContactItemType $contact)
 * @method DistributionListType getDistributionList()
 * @method AppendToItemFieldType setDistributionList(DistributionListType $distributionList)
 * @method MeetingMessageType getMeetingMessage()
 * @method AppendToItemFieldType setMeetingMessage(MeetingMessageType $meetingMessage)
 * @method MeetingRequestMessageType getMeetingRequest()
 * @method AppendToItemFieldType setMeetingRequest(MeetingRequestMessageType $meetingRequest)
 * @method MeetingResponseMessageType getMeetingResponse()
 * @method AppendToItemFieldType setMeetingResponse(MeetingResponseMessageType $meetingResponse)
 * @method MeetingCancellationMessageType getMeetingCancellation()
 * @method AppendToItemFieldType setMeetingCancellation(MeetingCancellationMessageType $meetingCancellation)
 * @method TaskType getTask()
 * @method AppendToItemFieldType setTask(TaskType $task)
 * @method PostItemType getPostItem()
 * @method AppendToItemFieldType setPostItem(PostItemType $postItem)
 */
class AppendToItemFieldType extends ItemChangeDescriptionType
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
