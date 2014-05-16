<?php
namespace CiscoSystems\SalesForceBundle\ForceToolkit\Soql\AST;

class SoqlString extends SoqlValue
{
    public function __toString()
    {
        $v = $this->getValue();
        $v = trim($v, '"\'');
        return '\'' . $v  . '\'';
    }
}
