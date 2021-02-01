<?php

namespace rklandesverband\ews\API\Message;

/**
 * Class representing SyncFolderHierarchyResponseMessageType
 *
 *
 * XSD Type: SyncFolderHierarchyResponseMessageType
 *
 * @method string getSyncState()
 * @method SyncFolderHierarchyResponseMessageType setSyncState(string $syncState)
 * @method boolean isIncludesLastFolderInRange()
 * @method boolean getIncludesLastFolderInRange()
 * @method SyncFolderHierarchyResponseMessageType setIncludesLastFolderInRange(boolean $includesLastFolderInRange)
 * @method \rklandesverband\ews\API\Type\SyncFolderHierarchyChangesType getChanges()
 * @method SyncFolderHierarchyResponseMessageType setChanges(\rklandesverband\ews\API\Type\SyncFolderHierarchyChangesType $changes)
 */
class SyncFolderHierarchyResponseMessageType extends ResponseMessageType
{

    /**
     * @var string
     */
    protected $syncState = null;

    /**
     * @var boolean
     */
    protected $includesLastFolderInRange = null;

    /**
     * @var \rklandesverband\ews\API\Type\SyncFolderHierarchyChangesType
     */
    protected $changes = null;
}
