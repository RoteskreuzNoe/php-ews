<?php

namespace rklandesverband\ews\API\Type;

use rklandesverband\ews\API\Type;

/**
 * Class representing NonEmptyArrayOfResponseObjectsType
 *
 *
 * XSD Type: NonEmptyArrayOfResponseObjectsType
 *
 * @method NonEmptyArrayOfResponseObjectsType addAcceptItem(AcceptItemType $acceptItem)
 * @method AcceptItemType[] getAcceptItem()
 * @method NonEmptyArrayOfResponseObjectsType setAcceptItem(array $acceptItem)
 * @method NonEmptyArrayOfResponseObjectsType addTentativelyAcceptItem(TentativelyAcceptItemType $tentativelyAcceptItem)
 * @method TentativelyAcceptItemType[] getTentativelyAcceptItem()
 * @method NonEmptyArrayOfResponseObjectsType setTentativelyAcceptItem(array $tentativelyAcceptItem)
 * @method NonEmptyArrayOfResponseObjectsType addDeclineItem(DeclineItemType $declineItem)
 * @method DeclineItemType[] getDeclineItem()
 * @method NonEmptyArrayOfResponseObjectsType setDeclineItem(array $declineItem)
 * @method NonEmptyArrayOfResponseObjectsType addReplyToItem(ReplyToItemType $replyToItem)
 * @method ReplyToItemType[] getReplyToItem()
 * @method NonEmptyArrayOfResponseObjectsType setReplyToItem(array $replyToItem)
 * @method NonEmptyArrayOfResponseObjectsType addForwardItem(ForwardItemType $forwardItem)
 * @method ForwardItemType[] getForwardItem()
 * @method NonEmptyArrayOfResponseObjectsType setForwardItem(array $forwardItem)
 * @method NonEmptyArrayOfResponseObjectsType addReplyAllToItem(ReplyAllToItemType $replyAllToItem)
 * @method ReplyAllToItemType[] getReplyAllToItem()
 * @method NonEmptyArrayOfResponseObjectsType setReplyAllToItem(array $replyAllToItem)
 * @method NonEmptyArrayOfResponseObjectsType addCancelCalendarItem(CancelCalendarItemType $cancelCalendarItem)
 * @method CancelCalendarItemType[] getCancelCalendarItem()
 * @method NonEmptyArrayOfResponseObjectsType setCancelCalendarItem(array $cancelCalendarItem)
 * @method NonEmptyArrayOfResponseObjectsType addRemoveItem(RemoveItemType $removeItem)
 * @method RemoveItemType[] getRemoveItem()
 * @method NonEmptyArrayOfResponseObjectsType setRemoveItem(array $removeItem)
 * @method NonEmptyArrayOfResponseObjectsType addSuppressReadReceipt(SuppressReadReceiptType $suppressReadReceipt)
 * @method SuppressReadReceiptType[] getSuppressReadReceipt()
 * @method NonEmptyArrayOfResponseObjectsType setSuppressReadReceipt(array $suppressReadReceipt)
 * @method NonEmptyArrayOfResponseObjectsType addPostReplyItem(PostReplyItemType $postReplyItem)
 * @method PostReplyItemType[] getPostReplyItem()
 * @method NonEmptyArrayOfResponseObjectsType setPostReplyItem(array $postReplyItem)
 * @method NonEmptyArrayOfResponseObjectsType addAcceptSharingInvitation(AcceptSharingInvitationType $acceptSharingInvitation)
 * @method AcceptSharingInvitationType[] getAcceptSharingInvitation()
 * @method NonEmptyArrayOfResponseObjectsType setAcceptSharingInvitation(array $acceptSharingInvitation)
 */
class NonEmptyArrayOfResponseObjectsType extends Type
{

    /**
     * @var \rklandesverband\ews\API\Type\AcceptItemType[]
     */
    protected $acceptItem = null;

    /**
     * @var \rklandesverband\ews\API\Type\TentativelyAcceptItemType[]
     */
    protected $tentativelyAcceptItem = null;

    /**
     * @var \rklandesverband\ews\API\Type\DeclineItemType[]
     */
    protected $declineItem = null;

    /**
     * @var \rklandesverband\ews\API\Type\ReplyToItemType[]
     */
    protected $replyToItem = null;

    /**
     * @var \rklandesverband\ews\API\Type\ForwardItemType[]
     */
    protected $forwardItem = null;

    /**
     * @var \rklandesverband\ews\API\Type\ReplyAllToItemType[]
     */
    protected $replyAllToItem = null;

    /**
     * @var \rklandesverband\ews\API\Type\CancelCalendarItemType[]
     */
    protected $cancelCalendarItem = null;

    /**
     * @var \rklandesverband\ews\API\Type\RemoveItemType[]
     */
    protected $removeItem = null;

    /**
     * @var \rklandesverband\ews\API\Type\SuppressReadReceiptType[]
     */
    protected $suppressReadReceipt = null;

    /**
     * @var \rklandesverband\ews\API\Type\PostReplyItemType[]
     */
    protected $postReplyItem = null;

    /**
     * @var \rklandesverband\ews\API\Type\AcceptSharingInvitationType[]
     */
    protected $acceptSharingInvitation = null;
}
