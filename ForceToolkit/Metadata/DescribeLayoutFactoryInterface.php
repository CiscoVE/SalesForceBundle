<?php
namespace CiscoSystems\SalesForceBundle\ForceToolkit\Metadata;

interface DescribeLayoutFactoryInterface
{
    /**
     * @abstract
     * @param $sobjectType
     * @return \CiscoSystems\SalesForceBundle\ForceToolkit\Soap\Mapping\DescribeLayoutResult
     */
    public function getDescribe($sobjectType, array $recordTypeIds = null);
}
