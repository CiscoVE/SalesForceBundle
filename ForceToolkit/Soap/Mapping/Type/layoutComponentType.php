<?php
namespace CiscoSystems\SalesForceBundle\ForceToolkit\Soap\Mapping\Type;

use CiscoSystems\SalesForceBundle\Soap\Mapping\Type\GenericType;

class layoutComponentType extends GenericType
{
    const Field = 'Field';
    const Separator = 'Separator';
    const SControl = 'SControl';
    const EmptySpace = 'EmptySpace';

    /**
     * The target namespace of the type.
     *
     * @return string
     */
    public static function getURI()
    {
        return 'urn:enterprise.soap.sforce.com';
    }
}
