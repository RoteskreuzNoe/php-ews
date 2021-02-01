<?php

namespace rklandesverband\ews\API\Message;

/**
 * Class representing SyncFolderHierarchyType
 *
 *
 * XSD Type: SyncFolderHierarchyType
 *
 * @method \rklandesverband\ews\API\Type\FolderResponseShapeType getFolderShape()
 * @method SyncFolderHierarchyType setFolderShape(\rklandesverband\ews\API\Type\FolderResponseShapeType $folderShape)
 * @method \rklandesverband\ews\API\Type\TargetFolderIdType getSyncFolderId()
 * @method SyncFolderHierarchyType setSyncFolderId(\rklandesverband\ews\API\Type\TargetFolderIdType $syncFolderId)
 * @method string getSyncState()
 * @method SyncFolderHierarchyType setSyncState(string $syncState)
 */
class SyncFolderHierarchyType extends BaseRequestType
{

    /**
     * @var \rklandesverband\ews\API\Type\FolderResponseShapeType
     */
    protected $folderShape = null;

    /**
     * @var \rklandesverband\ews\API\Type\TargetFolderIdType
     */
    protected $syncFolderId = null;

    /**
     * @var string
     */
    protected $syncState = null;
}
