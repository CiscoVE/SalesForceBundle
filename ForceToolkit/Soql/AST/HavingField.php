<?php
namespace CiscoSystems\SalesForceBundle\ForceToolkit\Soql\AST;

class HavingField implements HavingFieldInterface, ConditionLeftOperandInterface
{
    /**
     * @var string
     */
    private $fieldname;

    /**
     * @param string $fieldname
     */
    public function __construct($fieldname)
    {
        $this->fieldname = $fieldname;
    }

    /**
     * @return string
     */
    public function getFieldname()
    {
        return $this->fieldname;
    }
}
