<?php
namespace CiscoSystems\SalesForceBundle\ForceToolkit\Soql\AST;

class SoqlTrue extends SoqlValue
{
    public function __construct()
    {
        $this->value = 'TRUE';
    }
}
