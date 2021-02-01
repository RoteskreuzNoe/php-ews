<?php

namespace rklandesverband\ews\API\Message;

/**
 * Class representing ResolveNamesResponseMessageType
 *
 *
 * XSD Type: ResolveNamesResponseMessageType
 *
 * @method \rklandesverband\ews\API\Type\ArrayOfResolutionType getResolutionSet()
 * @method ResolveNamesResponseMessageType setResolutionSet(\rklandesverband\ews\API\Type\ArrayOfResolutionType $resolutionSet)
 */
class ResolveNamesResponseMessageType extends ResponseMessageType
{

    /**
     * @var \rklandesverband\ews\API\Type\ArrayOfResolutionType
     */
    protected $resolutionSet = null;
}
