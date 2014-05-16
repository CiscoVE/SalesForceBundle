<?php
namespace CiscoSystems\SalesForceBundle\ForceToolkit\Soql\AST;

use CiscoSystems\SalesForceBundle\ForceToolkit\Soql\AST\Functions\SoqlFunctionInterface;

class HavingFunction implements HavingFieldInterface, ConditionLeftOperandFunctionInterface
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

    public function getFieldname()
    {
        return $this->getFunction()->getName();
    }
}
