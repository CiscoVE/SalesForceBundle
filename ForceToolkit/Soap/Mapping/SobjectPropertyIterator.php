<?php
namespace CiscoSystems\SalesForceBundle\ForceToolkit\Soap\Mapping;

use CiscoSystems\SalesForceBundle\Common\Collection\GenericMap;

class SobjectPropertyIterator extends GenericMap
{
    public function __construct(SobjectInterface $sobject)
    {
        parent::__construct($sobject->toArray());
    }
}
