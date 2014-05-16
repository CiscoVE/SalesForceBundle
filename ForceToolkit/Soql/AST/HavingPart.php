<?php
namespace CiscoSystems\SalesForceBundle\ForceToolkit\Soql\AST;

class HavingPart
{
    /**
     * @var LogicalGroup
     */
    private $logicalGroup;

    /**
     * @param LogicalGroup $logicalGroup
     */
    public function __construct(LogicalGroup $logicalGroup)
    {
        $this->logicalGroup= $logicalGroup;
    }

    /**
     * @return \CiscoSystems\SalesForceBundle\ForceToolkit\Soql\AST\LogicalGroup
     */
    public function getLogicalGroup()
    {
        return $this->logicalGroup;
    }
}
