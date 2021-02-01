<?php

namespace rklandesverband\ews\API\Message;

/**
 * Class representing GetMessageTrackingReportResponseMessageType
 *
 *
 * XSD Type: GetMessageTrackingReportResponseMessageType
 *
 * @method \rklandesverband\ews\API\Type\MessageTrackingReportType getMessageTrackingReport()
 * @method GetMessageTrackingReportResponseMessageType setMessageTrackingReport(\rklandesverband\ews\API\Type\MessageTrackingReportType $messageTrackingReport)
 * @method GetMessageTrackingReportResponseMessageType addDiagnostics(string $diagnostics)
 * @method string[] getDiagnostics()
 * @method GetMessageTrackingReportResponseMessageType setDiagnostics(array $diagnostics)
 * @method GetMessageTrackingReportResponseMessageType addErrors(\rklandesverband\ews\API\Type\ArrayOfTrackingPropertiesType $errors)
 * @method \rklandesverband\ews\API\Type\ArrayOfTrackingPropertiesType[] getErrors()
 * @method GetMessageTrackingReportResponseMessageType setErrors(array $errors)
 * @method GetMessageTrackingReportResponseMessageType addProperties(\rklandesverband\ews\API\Type\TrackingPropertyType $properties)
 * @method \rklandesverband\ews\API\Type\TrackingPropertyType[] getProperties()
 * @method GetMessageTrackingReportResponseMessageType setProperties(array $properties)
 */
class GetMessageTrackingReportResponseMessageType extends ResponseMessageType
{

    /**
     * @var \rklandesverband\ews\API\Type\MessageTrackingReportType
     */
    protected $messageTrackingReport = null;

    /**
     * @var string[]
     */
    protected $diagnostics = null;

    /**
     * @var \rklandesverband\ews\API\Type\ArrayOfTrackingPropertiesType[]
     */
    protected $errors = null;

    /**
     * @var \rklandesverband\ews\API\Type\TrackingPropertyType[]
     */
    protected $properties = null;
}
