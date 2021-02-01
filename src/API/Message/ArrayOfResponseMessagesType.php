<?php

namespace rklandesverband\ews\API\Message;

use rklandesverband\ews\API\Message;

/**
 * Class representing ArrayOfResponseMessagesType
 *
 *
 * XSD Type: ArrayOfResponseMessagesType
 *
 * @method ArrayOfResponseMessagesType addCreateItemResponseMessage(ItemInfoResponseMessageType $createItemResponseMessage)
 * @method ItemInfoResponseMessageType[] getCreateItemResponseMessage()
 * @method ArrayOfResponseMessagesType setCreateItemResponseMessage(array $createItemResponseMessage)
 * @method ArrayOfResponseMessagesType addDeleteItemResponseMessage(ResponseMessageType $deleteItemResponseMessage)
 * @method ResponseMessageType[] getDeleteItemResponseMessage()
 * @method ArrayOfResponseMessagesType setDeleteItemResponseMessage(array $deleteItemResponseMessage)
 * @method ArrayOfResponseMessagesType addGetItemResponseMessage(ItemInfoResponseMessageType $getItemResponseMessage)
 * @method ItemInfoResponseMessageType[] getGetItemResponseMessage()
 * @method ArrayOfResponseMessagesType setGetItemResponseMessage(array $getItemResponseMessage)
 * @method ArrayOfResponseMessagesType addUpdateItemResponseMessage(UpdateItemResponseMessageType $updateItemResponseMessage)
 * @method UpdateItemResponseMessageType[] getUpdateItemResponseMessage()
 * @method ArrayOfResponseMessagesType setUpdateItemResponseMessage(array $updateItemResponseMessage)
 * @method ArrayOfResponseMessagesType addSendItemResponseMessage(ResponseMessageType $sendItemResponseMessage)
 * @method ResponseMessageType[] getSendItemResponseMessage()
 * @method ArrayOfResponseMessagesType setSendItemResponseMessage(array $sendItemResponseMessage)
 * @method ArrayOfResponseMessagesType addDeleteFolderResponseMessage(ResponseMessageType $deleteFolderResponseMessage)
 * @method ResponseMessageType[] getDeleteFolderResponseMessage()
 * @method ArrayOfResponseMessagesType setDeleteFolderResponseMessage(array $deleteFolderResponseMessage)
 * @method ArrayOfResponseMessagesType addEmptyFolderResponseMessage(ResponseMessageType $emptyFolderResponseMessage)
 * @method ResponseMessageType[] getEmptyFolderResponseMessage()
 * @method ArrayOfResponseMessagesType setEmptyFolderResponseMessage(array $emptyFolderResponseMessage)
 * @method ArrayOfResponseMessagesType addCreateFolderResponseMessage(FolderInfoResponseMessageType $createFolderResponseMessage)
 * @method FolderInfoResponseMessageType[] getCreateFolderResponseMessage()
 * @method ArrayOfResponseMessagesType setCreateFolderResponseMessage(array $createFolderResponseMessage)
 * @method ArrayOfResponseMessagesType addGetFolderResponseMessage(FolderInfoResponseMessageType $getFolderResponseMessage)
 * @method FolderInfoResponseMessageType[] getGetFolderResponseMessage()
 * @method ArrayOfResponseMessagesType setGetFolderResponseMessage(array $getFolderResponseMessage)
 * @method ArrayOfResponseMessagesType addFindFolderResponseMessage(FindFolderResponseMessageType $findFolderResponseMessage)
 * @method FindFolderResponseMessageType[] getFindFolderResponseMessage()
 * @method ArrayOfResponseMessagesType setFindFolderResponseMessage(array $findFolderResponseMessage)
 * @method ArrayOfResponseMessagesType addUpdateFolderResponseMessage(FolderInfoResponseMessageType $updateFolderResponseMessage)
 * @method FolderInfoResponseMessageType[] getUpdateFolderResponseMessage()
 * @method ArrayOfResponseMessagesType setUpdateFolderResponseMessage(array $updateFolderResponseMessage)
 * @method ArrayOfResponseMessagesType addMoveFolderResponseMessage(FolderInfoResponseMessageType $moveFolderResponseMessage)
 * @method FolderInfoResponseMessageType[] getMoveFolderResponseMessage()
 * @method ArrayOfResponseMessagesType setMoveFolderResponseMessage(array $moveFolderResponseMessage)
 * @method ArrayOfResponseMessagesType addCopyFolderResponseMessage(FolderInfoResponseMessageType $copyFolderResponseMessage)
 * @method FolderInfoResponseMessageType[] getCopyFolderResponseMessage()
 * @method ArrayOfResponseMessagesType setCopyFolderResponseMessage(array $copyFolderResponseMessage)
 * @method ArrayOfResponseMessagesType addCreateAttachmentResponseMessage(AttachmentInfoResponseMessageType $createAttachmentResponseMessage)
 * @method AttachmentInfoResponseMessageType[] getCreateAttachmentResponseMessage()
 * @method ArrayOfResponseMessagesType setCreateAttachmentResponseMessage(array $createAttachmentResponseMessage)
 * @method ArrayOfResponseMessagesType addDeleteAttachmentResponseMessage(DeleteAttachmentResponseMessageType $deleteAttachmentResponseMessage)
 * @method DeleteAttachmentResponseMessageType[] getDeleteAttachmentResponseMessage()
 * @method ArrayOfResponseMessagesType setDeleteAttachmentResponseMessage(array $deleteAttachmentResponseMessage)
 * @method ArrayOfResponseMessagesType addGetAttachmentResponseMessage(AttachmentInfoResponseMessageType $getAttachmentResponseMessage)
 * @method AttachmentInfoResponseMessageType[] getGetAttachmentResponseMessage()
 * @method ArrayOfResponseMessagesType setGetAttachmentResponseMessage(array $getAttachmentResponseMessage)
 * @method ArrayOfResponseMessagesType addUploadItemsResponseMessage(UploadItemsResponseMessageType $uploadItemsResponseMessage)
 * @method UploadItemsResponseMessageType[] getUploadItemsResponseMessage()
 * @method ArrayOfResponseMessagesType setUploadItemsResponseMessage(array $uploadItemsResponseMessage)
 * @method ArrayOfResponseMessagesType addExportItemsResponseMessage(ExportItemsResponseMessageType $exportItemsResponseMessage)
 * @method ExportItemsResponseMessageType[] getExportItemsResponseMessage()
 * @method ArrayOfResponseMessagesType setExportItemsResponseMessage(array $exportItemsResponseMessage)
 * @method ArrayOfResponseMessagesType addFindItemResponseMessage(FindItemResponseMessageType $findItemResponseMessage)
 * @method FindItemResponseMessageType[] getFindItemResponseMessage()
 * @method ArrayOfResponseMessagesType setFindItemResponseMessage(array $findItemResponseMessage)
 * @method ArrayOfResponseMessagesType addMoveItemResponseMessage(ItemInfoResponseMessageType $moveItemResponseMessage)
 * @method ItemInfoResponseMessageType[] getMoveItemResponseMessage()
 * @method ArrayOfResponseMessagesType setMoveItemResponseMessage(array $moveItemResponseMessage)
 * @method ArrayOfResponseMessagesType addCopyItemResponseMessage(ItemInfoResponseMessageType $copyItemResponseMessage)
 * @method ItemInfoResponseMessageType[] getCopyItemResponseMessage()
 * @method ArrayOfResponseMessagesType setCopyItemResponseMessage(array $copyItemResponseMessage)
 * @method ArrayOfResponseMessagesType addResolveNamesResponseMessage(ResolveNamesResponseMessageType $resolveNamesResponseMessage)
 * @method ResolveNamesResponseMessageType[] getResolveNamesResponseMessage()
 * @method ArrayOfResponseMessagesType setResolveNamesResponseMessage(array $resolveNamesResponseMessage)
 * @method ArrayOfResponseMessagesType addExpandDLResponseMessage(ExpandDLResponseMessageType $expandDLResponseMessage)
 * @method ExpandDLResponseMessageType[] getExpandDLResponseMessage()
 * @method ArrayOfResponseMessagesType setExpandDLResponseMessage(array $expandDLResponseMessage)
 * @method ArrayOfResponseMessagesType addGetServerTimeZonesResponseMessage(GetServerTimeZonesResponseMessageType $getServerTimeZonesResponseMessage)
 * @method GetServerTimeZonesResponseMessageType[] getGetServerTimeZonesResponseMessage()
 * @method ArrayOfResponseMessagesType setGetServerTimeZonesResponseMessage(array $getServerTimeZonesResponseMessage)
 * @method ArrayOfResponseMessagesType addGetEventsResponseMessage(GetEventsResponseMessageType $getEventsResponseMessage)
 * @method GetEventsResponseMessageType[] getGetEventsResponseMessage()
 * @method ArrayOfResponseMessagesType setGetEventsResponseMessage(array $getEventsResponseMessage)
 * @method ArrayOfResponseMessagesType addGetStreamingEventsResponseMessage(GetStreamingEventsResponseMessageType $getStreamingEventsResponseMessage)
 * @method GetStreamingEventsResponseMessageType[] getGetStreamingEventsResponseMessage()
 * @method ArrayOfResponseMessagesType setGetStreamingEventsResponseMessage(array $getStreamingEventsResponseMessage)
 * @method ArrayOfResponseMessagesType addSubscribeResponseMessage(SubscribeResponseMessageType $subscribeResponseMessage)
 * @method SubscribeResponseMessageType[] getSubscribeResponseMessage()
 * @method ArrayOfResponseMessagesType setSubscribeResponseMessage(array $subscribeResponseMessage)
 * @method ArrayOfResponseMessagesType addUnsubscribeResponseMessage(ResponseMessageType $unsubscribeResponseMessage)
 * @method ResponseMessageType[] getUnsubscribeResponseMessage()
 * @method ArrayOfResponseMessagesType setUnsubscribeResponseMessage(array $unsubscribeResponseMessage)
 * @method ArrayOfResponseMessagesType addSendNotificationResponseMessage(SendNotificationResponseMessageType $sendNotificationResponseMessage)
 * @method SendNotificationResponseMessageType[] getSendNotificationResponseMessage()
 * @method ArrayOfResponseMessagesType setSendNotificationResponseMessage(array $sendNotificationResponseMessage)
 * @method ArrayOfResponseMessagesType addSyncFolderHierarchyResponseMessage(SyncFolderHierarchyResponseMessageType $syncFolderHierarchyResponseMessage)
 * @method SyncFolderHierarchyResponseMessageType[] getSyncFolderHierarchyResponseMessage()
 * @method ArrayOfResponseMessagesType setSyncFolderHierarchyResponseMessage(array $syncFolderHierarchyResponseMessage)
 * @method ArrayOfResponseMessagesType addSyncFolderItemsResponseMessage(SyncFolderItemsResponseMessageType $syncFolderItemsResponseMessage)
 * @method SyncFolderItemsResponseMessageType[] getSyncFolderItemsResponseMessage()
 * @method ArrayOfResponseMessagesType setSyncFolderItemsResponseMessage(array $syncFolderItemsResponseMessage)
 * @method ArrayOfResponseMessagesType addCreateManagedFolderResponseMessage(FolderInfoResponseMessageType $createManagedFolderResponseMessage)
 * @method FolderInfoResponseMessageType[] getCreateManagedFolderResponseMessage()
 * @method ArrayOfResponseMessagesType setCreateManagedFolderResponseMessage(array $createManagedFolderResponseMessage)
 * @method ArrayOfResponseMessagesType addConvertIdResponseMessage(ConvertIdResponseMessageType $convertIdResponseMessage)
 * @method ConvertIdResponseMessageType[] getConvertIdResponseMessage()
 * @method ArrayOfResponseMessagesType setConvertIdResponseMessage(array $convertIdResponseMessage)
 * @method ArrayOfResponseMessagesType addGetSharingMetadataResponseMessage(GetSharingMetadataResponseMessageType $getSharingMetadataResponseMessage)
 * @method GetSharingMetadataResponseMessageType[] getGetSharingMetadataResponseMessage()
 * @method ArrayOfResponseMessagesType setGetSharingMetadataResponseMessage(array $getSharingMetadataResponseMessage)
 * @method ArrayOfResponseMessagesType addRefreshSharingFolderResponseMessage(RefreshSharingFolderResponseMessageType $refreshSharingFolderResponseMessage)
 * @method RefreshSharingFolderResponseMessageType[] getRefreshSharingFolderResponseMessage()
 * @method ArrayOfResponseMessagesType setRefreshSharingFolderResponseMessage(array $refreshSharingFolderResponseMessage)
 * @method ArrayOfResponseMessagesType addGetSharingFolderResponseMessage(GetSharingFolderResponseMessageType $getSharingFolderResponseMessage)
 * @method GetSharingFolderResponseMessageType[] getGetSharingFolderResponseMessage()
 * @method ArrayOfResponseMessagesType setGetSharingFolderResponseMessage(array $getSharingFolderResponseMessage)
 * @method ArrayOfResponseMessagesType addCreateUserConfigurationResponseMessage(ResponseMessageType $createUserConfigurationResponseMessage)
 * @method ResponseMessageType[] getCreateUserConfigurationResponseMessage()
 * @method ArrayOfResponseMessagesType setCreateUserConfigurationResponseMessage(array $createUserConfigurationResponseMessage)
 * @method ArrayOfResponseMessagesType addDeleteUserConfigurationResponseMessage(ResponseMessageType $deleteUserConfigurationResponseMessage)
 * @method ResponseMessageType[] getDeleteUserConfigurationResponseMessage()
 * @method ArrayOfResponseMessagesType setDeleteUserConfigurationResponseMessage(array $deleteUserConfigurationResponseMessage)
 * @method ArrayOfResponseMessagesType addGetUserConfigurationResponseMessage(GetUserConfigurationResponseMessageType $getUserConfigurationResponseMessage)
 * @method GetUserConfigurationResponseMessageType[] getGetUserConfigurationResponseMessage()
 * @method ArrayOfResponseMessagesType setGetUserConfigurationResponseMessage(array $getUserConfigurationResponseMessage)
 * @method ArrayOfResponseMessagesType addUpdateUserConfigurationResponseMessage(ResponseMessageType $updateUserConfigurationResponseMessage)
 * @method ResponseMessageType[] getUpdateUserConfigurationResponseMessage()
 * @method ArrayOfResponseMessagesType setUpdateUserConfigurationResponseMessage(array $updateUserConfigurationResponseMessage)
 * @method ArrayOfResponseMessagesType addGetRoomListsResponse(GetRoomListsResponseMessageType $getRoomListsResponse)
 * @method GetRoomListsResponseMessageType[] getGetRoomListsResponse()
 * @method ArrayOfResponseMessagesType setGetRoomListsResponse(array $getRoomListsResponse)
 * @method ArrayOfResponseMessagesType addGetRoomsResponse(GetRoomsResponseMessageType $getRoomsResponse)
 * @method GetRoomsResponseMessageType[] getGetRoomsResponse()
 * @method ArrayOfResponseMessagesType setGetRoomsResponse(array $getRoomsResponse)
 * @method ArrayOfResponseMessagesType addApplyConversationActionResponseMessage(ResponseMessageType $applyConversationActionResponseMessage)
 * @method ResponseMessageType[] getApplyConversationActionResponseMessage()
 * @method ArrayOfResponseMessagesType setApplyConversationActionResponseMessage(array $applyConversationActionResponseMessage)
 * @method ArrayOfResponseMessagesType addFindMailboxStatisticsByKeywordsResponseMessage(FindMailboxStatisticsByKeywordsResponseMessageType $findMailboxStatisticsByKeywordsResponseMessage)
 * @method FindMailboxStatisticsByKeywordsResponseMessageType[] getFindMailboxStatisticsByKeywordsResponseMessage()
 * @method ArrayOfResponseMessagesType setFindMailboxStatisticsByKeywordsResponseMessage(array $findMailboxStatisticsByKeywordsResponseMessage)
 * @method ArrayOfResponseMessagesType addGetPasswordExpirationDateResponse(GetPasswordExpirationDateResponseMessageType $getPasswordExpirationDateResponse)
 * @method GetPasswordExpirationDateResponseMessageType[] getGetPasswordExpirationDateResponse()
 * @method ArrayOfResponseMessagesType setGetPasswordExpirationDateResponse(array $getPasswordExpirationDateResponse)
 */
class ArrayOfResponseMessagesType extends Message
{

    /**
     * @var \rklandesverband\ews\API\Message\ItemInfoResponseMessageType[]
     */
    protected $createItemResponseMessage = null;

    /**
     * @var \rklandesverband\ews\API\Message\ResponseMessageType[]
     */
    protected $deleteItemResponseMessage = null;

    /**
     * @var \rklandesverband\ews\API\Message\ItemInfoResponseMessageType[]
     */
    protected $getItemResponseMessage = null;

    /**
     * @var \rklandesverband\ews\API\Message\UpdateItemResponseMessageType[]
     */
    protected $updateItemResponseMessage = null;

    /**
     * @var \rklandesverband\ews\API\Message\ResponseMessageType[]
     */
    protected $sendItemResponseMessage = null;

    /**
     * @var \rklandesverband\ews\API\Message\ResponseMessageType[]
     */
    protected $deleteFolderResponseMessage = null;

    /**
     * @var \rklandesverband\ews\API\Message\ResponseMessageType[]
     */
    protected $emptyFolderResponseMessage = null;

    /**
     * @var \rklandesverband\ews\API\Message\FolderInfoResponseMessageType[]
     */
    protected $createFolderResponseMessage = null;

    /**
     * @var \rklandesverband\ews\API\Message\FolderInfoResponseMessageType[]
     */
    protected $getFolderResponseMessage = null;

    /**
     * @var \rklandesverband\ews\API\Message\FindFolderResponseMessageType[]
     */
    protected $findFolderResponseMessage = null;

    /**
     * @var \rklandesverband\ews\API\Message\FolderInfoResponseMessageType[]
     */
    protected $updateFolderResponseMessage = null;

    /**
     * @var \rklandesverband\ews\API\Message\FolderInfoResponseMessageType[]
     */
    protected $moveFolderResponseMessage = null;

    /**
     * @var \rklandesverband\ews\API\Message\FolderInfoResponseMessageType[]
     */
    protected $copyFolderResponseMessage = null;

    /**
     * @var \rklandesverband\ews\API\Message\AttachmentInfoResponseMessageType[]
     */
    protected $createAttachmentResponseMessage = null;

    /**
     * @var \rklandesverband\ews\API\Message\DeleteAttachmentResponseMessageType[]
     */
    protected $deleteAttachmentResponseMessage = null;

    /**
     * @var \rklandesverband\ews\API\Message\AttachmentInfoResponseMessageType[]
     */
    protected $getAttachmentResponseMessage = null;

    /**
     * @var \rklandesverband\ews\API\Message\UploadItemsResponseMessageType[]
     */
    protected $uploadItemsResponseMessage = null;

    /**
     * @var \rklandesverband\ews\API\Message\ExportItemsResponseMessageType[]
     */
    protected $exportItemsResponseMessage = null;

    /**
     * @var \rklandesverband\ews\API\Message\FindItemResponseMessageType[]
     */
    protected $findItemResponseMessage = null;

    /**
     * @var \rklandesverband\ews\API\Message\ItemInfoResponseMessageType[]
     */
    protected $moveItemResponseMessage = null;

    /**
     * @var \rklandesverband\ews\API\Message\ItemInfoResponseMessageType[]
     */
    protected $copyItemResponseMessage = null;

    /**
     * @var \rklandesverband\ews\API\Message\ResolveNamesResponseMessageType[]
     */
    protected $resolveNamesResponseMessage = null;

    /**
     * @var \rklandesverband\ews\API\Message\ExpandDLResponseMessageType[]
     */
    protected $expandDLResponseMessage = null;

    /**
     * @var \rklandesverband\ews\API\Message\GetServerTimeZonesResponseMessageType[]
     */
    protected $getServerTimeZonesResponseMessage = null;

    /**
     * @var \rklandesverband\ews\API\Message\GetEventsResponseMessageType[]
     */
    protected $getEventsResponseMessage = null;

    /**
     * @var \rklandesverband\ews\API\Message\GetStreamingEventsResponseMessageType[]
     */
    protected $getStreamingEventsResponseMessage = null;

    /**
     * @var \rklandesverband\ews\API\Message\SubscribeResponseMessageType[]
     */
    protected $subscribeResponseMessage = null;

    /**
     * @var \rklandesverband\ews\API\Message\ResponseMessageType[]
     */
    protected $unsubscribeResponseMessage = null;

    /**
     * @var \rklandesverband\ews\API\Message\SendNotificationResponseMessageType[]
     */
    protected $sendNotificationResponseMessage = null;

    /**
     * @var \rklandesverband\ews\API\Message\SyncFolderHierarchyResponseMessageType[]
     */
    protected $syncFolderHierarchyResponseMessage = null;

    /**
     * @var \rklandesverband\ews\API\Message\SyncFolderItemsResponseMessageType[]
     */
    protected $syncFolderItemsResponseMessage = null;

    /**
     * @var \rklandesverband\ews\API\Message\FolderInfoResponseMessageType[]
     */
    protected $createManagedFolderResponseMessage = null;

    /**
     * @var \rklandesverband\ews\API\Message\ConvertIdResponseMessageType[]
     */
    protected $convertIdResponseMessage = null;

    /**
     * @var \rklandesverband\ews\API\Message\GetSharingMetadataResponseMessageType[]
     */
    protected $getSharingMetadataResponseMessage = null;

    /**
     * @var \rklandesverband\ews\API\Message\RefreshSharingFolderResponseMessageType[]
     */
    protected $refreshSharingFolderResponseMessage = null;

    /**
     * @var \rklandesverband\ews\API\Message\GetSharingFolderResponseMessageType[]
     */
    protected $getSharingFolderResponseMessage = null;

    /**
     * @var \rklandesverband\ews\API\Message\ResponseMessageType[]
     */
    protected $createUserConfigurationResponseMessage = null;

    /**
     * @var \rklandesverband\ews\API\Message\ResponseMessageType[]
     */
    protected $deleteUserConfigurationResponseMessage = null;

    /**
     * @var \rklandesverband\ews\API\Message\GetUserConfigurationResponseMessageType[]
     */
    protected $getUserConfigurationResponseMessage = null;

    /**
     * @var \rklandesverband\ews\API\Message\ResponseMessageType[]
     */
    protected $updateUserConfigurationResponseMessage = null;

    /**
     * @var \rklandesverband\ews\API\Message\GetRoomListsResponseMessageType[]
     */
    protected $getRoomListsResponse = null;

    /**
     * @var \rklandesverband\ews\API\Message\GetRoomsResponseMessageType[]
     */
    protected $getRoomsResponse = null;

    /**
     * @var \rklandesverband\ews\API\Message\ResponseMessageType[]
     */
    protected $applyConversationActionResponseMessage = null;

    /**
     * @var
     * \rklandesverband\ews\API\Message\FindMailboxStatisticsByKeywordsResponseMessageType[]
     */
    protected $findMailboxStatisticsByKeywordsResponseMessage = null;

    /**
     * @var \rklandesverband\ews\API\Message\GetPasswordExpirationDateResponseMessageType[]
     */
    protected $getPasswordExpirationDateResponse = null;
}
