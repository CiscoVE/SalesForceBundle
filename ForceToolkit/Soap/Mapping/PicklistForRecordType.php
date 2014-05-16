<?php
namespace CiscoSystems\SalesForceBundle\ForceToolkit\Soap\Mapping;

use CiscoSystems\SalesForceBundle\Soap\Mapping\ClassInterface;

class PicklistForRecordType implements ClassInterface
{
    /**
     *
     * @var string $picklistName
     */
    private $picklistName;

    /**
     *
     * @var PicklistEntry $picklistValues
     */
    private $picklistValues;

    /**
     * Constructor.
     *
     * @param string $picklistName
     * @param PicklistEntry $picklistValues
     */
    private function __construct($picklistName, $picklistValues)
    {
        $this->picklistName = $picklistName;

        $this->picklistValues = $picklistValues;
    }

    /**
     * @param string $picklistName
     */
    public function setPicklistName($picklistName)
    {
        $this->picklistName = $picklistName;
    }

    /**
     * @return string
     */
    public function getPicklistName()
    {
        return $this->picklistName;
    }

    /**
     * @param \CiscoSystems\SalesForceBundle\ForceToolkit\Soap\Mapping\PicklistEntry $picklistValues
     */
    public function setPicklistValues($picklistValues)
    {
        $this->picklistValues = $picklistValues;
    }

    /**
     * @return \CiscoSystems\SalesForceBundle\ForceToolkit\Soap\Mapping\PicklistEntry
     */
    public function getPicklistValues()
    {
        return $this->picklistValues;
    }
}
