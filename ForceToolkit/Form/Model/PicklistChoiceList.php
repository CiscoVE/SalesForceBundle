<?php
namespace CiscoSystems\SalesForceBundle\ForceToolkit\Form\Model;

use
    Symfony\Component\Form\Extension\Core\ChoiceList\SimpleChoiceList,
    CiscoSystems\SalesForceBundle\ForceToolkit\Metadata\FieldInterface;

class PicklistChoiceList extends SimpleChoiceList implements PicklistChoiceListInterface
{
    /**
     * @var \CiscoSystems\SalesForceBundle\ForceToolkit\Metadata\Field
     */
    private $field;

    /**
     * @var array
     */
    private $filter;

    /**
     * Constructor.
     *
     * @param \CiscoSystems\SalesForceBundle\ForceToolkit\Metadata\FieldInterface $field
     * @param array|null $filter
     * @throws \RuntimeException
     * @return \CiscoSystems\SalesForceBundle\ForceToolkit\Form\Model\PicklistChoiceList
     */
    public function __construct(FieldInterface $field, array $filter = null)
    {
        $this->field = $field;

        $this->filter = $filter;

        $choices = array();

        if(null === $this->field->getPicklistEntries())
        {
            throw new \RuntimeException('No picklist entries given. Correct field mapping?');
        }
        foreach($this->field->getPicklistEntries() AS $entry)
        {
            /** @var $entry \CiscoSystems\SalesForceBundle\ForceToolkit\Soap\Mapping\PicklistEntry */
            if(is_array($this->filter) && ! in_array($entry->getValue(), $this->filter))
            {
                continue;
            }

            $choices[$entry->getValue()] = $entry->getLabel();
        }
        parent::__construct($choices);
    }

    /**
     * @return \CiscoSystems\SalesForceBundle\ForceToolkit\Metadata\Field|\CiscoSystems\SalesForceBundle\ForceToolkit\Metadata\FieldInterface
     */
    public function getField()
    {
        return $this->field;
    }

    /**
     * @return array
     */
    public function getFilter()
    {
        return $this->filter;
    }
}