<?php

namespace rklandesverband\ews\API\Message;

/**
 * Class representing GetUserAvailabilityRequestType
 *
 *
 * XSD Type: GetUserAvailabilityRequestType
 *
 * @method \rklandesverband\ews\API\Type\TimeZone getTimeZone()
 * @method GetUserAvailabilityRequestType setTimeZone(\rklandesverband\ews\API\Type\TimeZone $timeZone)
 * @method GetUserAvailabilityRequestType addMailboxDataArray(\rklandesverband\ews\API\Type\MailboxDataType $mailboxDataArray)
 * @method \rklandesverband\ews\API\Type\MailboxDataType[] getMailboxDataArray()
 * @method GetUserAvailabilityRequestType setMailboxDataArray(array $mailboxDataArray)
 * @method \rklandesverband\ews\API\Type\FreeBusyViewOptions getFreeBusyViewOptions()
 * @method GetUserAvailabilityRequestType setFreeBusyViewOptions(\rklandesverband\ews\API\Type\FreeBusyViewOptions $freeBusyViewOptions)
 * @method \rklandesverband\ews\API\Type\SuggestionsViewOptions getSuggestionsViewOptions()
 * @method GetUserAvailabilityRequestType setSuggestionsViewOptions(\rklandesverband\ews\API\Type\SuggestionsViewOptions $suggestionsViewOptions)
 */
class GetUserAvailabilityRequestType extends BaseRequestType
{

    /**
     * @var \rklandesverband\ews\API\Type\TimeZone
     */
    protected $timeZone = null;

    /**
     * @var \rklandesverband\ews\API\Type\MailboxDataType[]
     */
    protected $mailboxDataArray = null;

    /**
     * @var \rklandesverband\ews\API\Type\FreeBusyViewOptions
     */
    protected $freeBusyViewOptions = null;

    /**
     * @var \rklandesverband\ews\API\Type\SuggestionsViewOptions
     */
    protected $suggestionsViewOptions = null;
}
