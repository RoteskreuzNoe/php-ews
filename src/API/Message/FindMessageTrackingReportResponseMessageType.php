<?php

namespace rklandesverband\ews\API\Message;

/**
 * Class representing FindMessageTrackingReportResponseMessageType
 *
 *
 * XSD Type: FindMessageTrackingReportResponseMessageType
 *
 * @method FindMessageTrackingReportResponseMessageType addDiagnostics(string $diagnostics)
 * @method string[] getDiagnostics()
 * @method FindMessageTrackingReportResponseMessageType setDiagnostics(array $diagnostics)
 * @method FindMessageTrackingReportResponseMessageType addMessageTrackingSearchResults(\rklandesverband\ews\API\Type\FindMessageTrackingSearchResultType $messageTrackingSearchResults)
 * @method \rklandesverband\ews\API\Type\FindMessageTrackingSearchResultType[] getMessageTrackingSearchResults()
 * @method FindMessageTrackingReportResponseMessageType setMessageTrackingSearchResults(array $messageTrackingSearchResults)
 * @method string getExecutedSearchScope()
 * @method FindMessageTrackingReportResponseMessageType setExecutedSearchScope(string $executedSearchScope)
 * @method FindMessageTrackingReportResponseMessageType addErrors(\rklandesverband\ews\API\Type\ArrayOfTrackingPropertiesType $errors)
 * @method \rklandesverband\ews\API\Type\ArrayOfTrackingPropertiesType[] getErrors()
 * @method FindMessageTrackingReportResponseMessageType setErrors(array $errors)
 * @method FindMessageTrackingReportResponseMessageType addProperties(\rklandesverband\ews\API\Type\TrackingPropertyType $properties)
 * @method \rklandesverband\ews\API\Type\TrackingPropertyType[] getProperties()
 * @method FindMessageTrackingReportResponseMessageType setProperties(array $properties)
 */
class FindMessageTrackingReportResponseMessageType extends ResponseMessageType
{

    /**
     * @var string[]
     */
    protected $diagnostics = null;

    /**
     * @var \rklandesverband\ews\API\Type\FindMessageTrackingSearchResultType[]
     */
    protected $messageTrackingSearchResults = null;

    /**
     * @var string
     */
    protected $executedSearchScope = null;

    /**
     * @var \rklandesverband\ews\API\Type\ArrayOfTrackingPropertiesType[]
     */
    protected $errors = null;

    /**
     * @var \rklandesverband\ews\API\Type\TrackingPropertyType[]
     */
    protected $properties = null;
}
