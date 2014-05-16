<?php
namespace CiscoSystems\SalesForceBundle\ForceToolkit\Soql\AST;

class SoqlFalse extends SoqlValue
{
    public function __construct()
    {
        $this->value = 'FALSE';
    }
}
