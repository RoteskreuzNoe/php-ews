<?php

namespace rklandesverband\ews\API\Type;

/**
 * Class representing AppendToFolderFieldType
 *
 *
 * XSD Type: AppendToFolderFieldType
 *
 * @method FolderType getFolder()
 * @method AppendToFolderFieldType setFolder(FolderType $folder)
 * @method CalendarFolderType getCalendarFolder()
 * @method AppendToFolderFieldType setCalendarFolder(CalendarFolderType $calendarFolder)
 * @method ContactsFolderType getContactsFolder()
 * @method AppendToFolderFieldType setContactsFolder(ContactsFolderType $contactsFolder)
 * @method SearchFolderType getSearchFolder()
 * @method AppendToFolderFieldType setSearchFolder(SearchFolderType $searchFolder)
 * @method TasksFolderType getTasksFolder()
 * @method AppendToFolderFieldType setTasksFolder(TasksFolderType $tasksFolder)
 */
class AppendToFolderFieldType extends FolderChangeDescriptionType
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
