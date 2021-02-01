<?php

namespace rklandesverband\ews\API\Message;

/**
 * Class representing FindMailboxStatisticsByKeywordsResponseMessageType
 *
 * Response message type for the FindMailboxStatisticsByKeywords web method.
 * XSD Type: FindMailboxStatisticsByKeywordsResponseMessageType
 *
 * @method \rklandesverband\ews\API\Type\MailboxStatisticsSearchResultType getMailboxStatisticsSearchResult()
 * @method FindMailboxStatisticsByKeywordsResponseMessageType setMailboxStatisticsSearchResult(\rklandesverband\ews\API\Type\MailboxStatisticsSearchResultType $mailboxStatisticsSearchResult)
 */
class FindMailboxStatisticsByKeywordsResponseMessageType extends ResponseMessageType
{

    /**
     * @var \rklandesverband\ews\API\Type\MailboxStatisticsSearchResultType
     */
    protected $mailboxStatisticsSearchResult = null;
}
