<?php
namespace CiscoSystems\SalesForceBundle\ForceToolkit\Soql\AST;

class AnonymousVariable extends SoqlValue
{
    public function __construct()
    {
        parent::__construct('?');
    }
}
