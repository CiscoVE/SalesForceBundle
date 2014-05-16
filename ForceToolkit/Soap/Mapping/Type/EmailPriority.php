<?php
namespace CiscoSystems\SalesForceBundle\ForceToolkit\Soap\Mapping\Type;

use CiscoSystems\SalesForceBundle\Soap\Mapping\Type\GenericType;

class EmailPriority extends GenericType
{
    const Highest = 'Highest';
    const High = 'High';
    const Normal = 'Normal';
    const Low = 'Low';
    const Lowest = 'Lowest';

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
