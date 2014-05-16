<?php
namespace CiscoSystems\SalesForceBundle\ForceToolkit\Soql\AST\Functions;

class Distance extends SoqlFunction
{
    protected $name = 'DISTANCE';

    /**
     * @return int: Bitmask calculated out of one or more of
     *              the CONTEXT_* interface constants.
     */
    public function getAllowedContext()
    {
        return self::CONTEXT_WHERE | self::CONTEXT_ORDER_BY;
    }

    /**
     * Returns an array (one entry for each argument) containing
     * a list of class names that are allowed as an argument
     * for the particular function.
     *
     * @return array<array<string>>
     */
    public function getAllowedArguments()
    {
        return array(
            array(
                'CiscoSystems\SalesForceBundle\ForceToolkit\Soql\AST\SoqlName',
                'CiscoSystems\SalesForceBundle\ForceToolkit\Soql\AST\Functions\Geolocation'
            ),
            array(
                'CiscoSystems\SalesForceBundle\ForceToolkit\Soql\AST\SoqlName',
                'CiscoSystems\SalesForceBundle\ForceToolkit\Soql\AST\Functions\Geolocation'
            ),
            array(
                'CiscoSystems\SalesForceBundle\ForceToolkit\Soql\AST\SoqlString'
            )
        );
    }
}
