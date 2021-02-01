<?php

namespace rklandesverband\ews\API\Type;

use rklandesverband\ews\API\Type;

/**
 * Class representing SyncFolderHierarchyCreateOrUpdateType
 *
 *
 * XSD Type: SyncFolderHierarchyCreateOrUpdateType
 *
 * @method FolderType getFolder()
 * @method SyncFolderHierarchyCreateOrUpdateType setFolder(FolderType $folder)
 * @method CalendarFolderType getCalendarFolder()
 * @method SyncFolderHierarchyCreateOrUpdateType setCalendarFolder(CalendarFolderType $calendarFolder)
 * @method ContactsFolderType getContactsFolder()
 * @method SyncFolderHierarchyCreateOrUpdateType setContactsFolder(ContactsFolderType $contactsFolder)
 * @method SearchFolderType getSearchFolder()
 * @method SyncFolderHierarchyCreateOrUpdateType setSearchFolder(SearchFolderType $searchFolder)
 * @method TasksFolderType getTasksFolder()
 * @method SyncFolderHierarchyCreateOrUpdateType setTasksFolder(TasksFolderType $tasksFolder)
 */
class SyncFolderHierarchyCreateOrUpdateType extends Type
{

    /**
     * @var \rklandesverband\ews\API\Type\FolderType
     */
    protected $folder = null;

    /**
     * @var \rklandesverband\ews\API\Type\CalendarFolderType
     */
    protected $calendarFolder = null;

    /**
     * @var \rklandesverband\ews\API\Type\ContactsFolderType
     */
    protected $contactsFolder = null;

    /**
     * @var \rklandesverband\ews\API\Type\SearchFolderType
     */
    protected $searchFolder = null;

    /**
     * @var \rklandesverband\ews\API\Type\TasksFolderType
     */
    protected $tasksFolder = null;
}
