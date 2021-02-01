<?php

namespace rklandesverband\ews\API\Message;

/**
 * Class representing FindMessageTrackingReportRequestType
 *
 *
 * XSD Type: FindMessageTrackingReportRequestType
 *
 * @method string getScope()
 * @method FindMessageTrackingReportRequestType setScope(string $scope)
 * @method string getDomain()
 * @method FindMessageTrackingReportRequestType setDomain(string $domain)
 * @method \rklandesverband\ews\API\Type\EmailAddressType getSender()
 * @method FindMessageTrackingReportRequestType setSender(\rklandesverband\ews\API\Type\EmailAddressType $sender)
 * @method \rklandesverband\ews\API\Type\EmailAddressType getPurportedSender()
 * @method FindMessageTrackingReportRequestType setPurportedSender(\rklandesverband\ews\API\Type\EmailAddressType $purportedSender)
 * @method \rklandesverband\ews\API\Type\EmailAddressType getRecipient()
 * @method FindMessageTrackingReportRequestType setRecipient(\rklandesverband\ews\API\Type\EmailAddressType $recipient)
 * @method string getSubject()
 * @method FindMessageTrackingReportRequestType setSubject(string $subject)
 * @method \DateTime getStartDateTime()
 * @method FindMessageTrackingReportRequestType setStartDateTime(\DateTime $startDateTime)
 * @method \DateTime getEndDateTime()
 * @method FindMessageTrackingReportRequestType setEndDateTime(\DateTime $endDateTime)
 * @method string getMessageId()
 * @method FindMessageTrackingReportRequestType setMessageId(string $messageId)
 * @method \rklandesverband\ews\API\Type\EmailAddressType getFederatedDeliveryMailbox()
 * @method FindMessageTrackingReportRequestType setFederatedDeliveryMailbox(\rklandesverband\ews\API\Type\EmailAddressType $federatedDeliveryMailbox)
 * @method string getDiagnosticsLevel()
 * @method FindMessageTrackingReportRequestType setDiagnosticsLevel(string $diagnosticsLevel)
 * @method string getServerHint()
 * @method FindMessageTrackingReportRequestType setServerHint(string $serverHint)
 * @method FindMessageTrackingReportRequestType addProperties(\rklandesverband\ews\API\Type\TrackingPropertyType $properties)
 * @method \rklandesverband\ews\API\Type\TrackingPropertyType[] getProperties()
 * @method FindMessageTrackingReportRequestType setProperties(array $properties)
 */
class FindMessageTrackingReportRequestType extends BaseRequestType
{

    /**
     * @var string
     */
    protected $scope = null;

    /**
     * @var string
     */
    protected $domain = null;

    /**
     * @var \rklandesverband\ews\API\Type\EmailAddressType
     */
    protected $sender = null;

    /**
     * @var \rklandesverband\ews\API\Type\EmailAddressType
     */
    protected $purportedSender = null;

    /**
     * @var \rklandesverband\ews\API\Type\EmailAddressType
     */
    protected $recipient = null;

    /**
     * @var string
     */
    protected $subject = null;

    /**
     * @var \DateTime
     */
    protected $startDateTime = null;

    protected $_typeMap = array(
        'startDateTime' => 'dateTime',
        'endDateTime' => 'dateTime',
    );

    /**
     * @var \DateTime
     */
    protected $endDateTime = null;

    /**
     * @var string
     */
    protected $messageId = null;

    /**
     * @var \rklandesverband\ews\API\Type\EmailAddressType
     */
    protected $federatedDeliveryMailbox = null;

    /**
     * @var string
     */
    protected $diagnosticsLevel = null;

    /**
     * @var string
     */
    protected $serverHint = null;

    /**
     * @var \rklandesverband\ews\API\Type\TrackingPropertyType[]
     */
    protected $properties = null;
}
