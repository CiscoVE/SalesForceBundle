<?php
namespace CiscoSystems\SalesForceBundle\ForceToolkit\Soql\AST;

use CiscoSystems\SalesForceBundle\ForceToolkit\Soql\AST\Functions\SoqlFunctionInterface;

class GroupByFunction implements GroupableInterface
{
    /**
     * @var Functions\SoqlFunctionInterface
     */
    private $function;

    /**
     * @param Functions\SoqlFunctionInterface $function
     */
    public function __construct(SoqlFunctionInterface $function)
    {
        $this->function = $function;
    }

    /**
     * @return \CiscoSystems\SalesForceBundle\ForceToolkit\Soql\AST\Functions\SoqlFunctionInterface
     */
    public function getFunction()
    {
        return $this->function;
    }
}
