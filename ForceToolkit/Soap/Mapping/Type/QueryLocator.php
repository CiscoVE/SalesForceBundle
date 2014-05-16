<?php
namespace CiscoSystems\SalesForceBundle\ForceToolkit\Soap\Mapping\Type;

use CiscoSystems\SalesForceBundle\Soap\Mapping\Type\GenericType;

/**
 * QueryLocator
 */
class QueryLocator extends GenericType
{
    static function getName()
    {
        return 'QueryLocator';
    }
}
