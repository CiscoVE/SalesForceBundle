<?php
namespace CiscoSystems\SalesForceBundle\ForceToolkit\Soql\AST;

interface QueryInterface
{
    /**
     * @return Query
     */
    public function getQuery();
}
