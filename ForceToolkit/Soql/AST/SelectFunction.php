<?php
namespace CiscoSystems\SalesForceBundle\ForceToolkit\Soql\AST;

use CiscoSystems\SalesForceBundle\ForceToolkit\Soql\AST\Functions\SoqlFunctionInterface;

class SelectFunction extends AbstractCanHazAlias implements SelectFieldInterface
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
     * @return Functions\SoqlFunctionInterface
     */
    public function getFunction()
    {
        return $this->function;
    }
}
