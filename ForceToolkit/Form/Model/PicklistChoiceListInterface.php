<?php
namespace CiscoSystems\SalesForceBundle\ForceToolkit\Form\Model;

use
    Symfony\Component\Form\Extension\Core\ChoiceList\ChoiceListInterface;

interface PicklistChoiceListInterface extends ChoiceListInterface
{
    /**
     * @return \CiscoSystems\SalesForceBundle\ForceToolkit\Metadata\FieldInterface
     */
    public function getField();

    /**
     * @abstract
     * @return array
     */
    public function getFilter();
}