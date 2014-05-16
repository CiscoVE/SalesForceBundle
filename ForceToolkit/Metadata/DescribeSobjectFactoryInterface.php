<?php
namespace CiscoSystems\SalesForceBundle\ForceToolkit\Metadata;

interface DescribeSobjectFactoryInterface
{
    /**
     * @abstract
     * @param $sobjectType
     * @return \CiscoSystems\SalesForceBundle\ForceToolkit\Soap\Mapping\DescribeSObjectResult
     */
    public function getDescribe($sobjectType);
}
