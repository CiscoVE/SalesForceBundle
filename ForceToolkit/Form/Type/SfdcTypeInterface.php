<?php
namespace CiscoSystems\SalesForceBundle\ForceToolkit\Form\Type;

use Symfony\Component\Form\FormTypeInterface;

interface SfdcTypeInterface extends FormTypeInterface
{
    /**
     * @return \CiscoSystems\SalesForceBundle\ForceToolkit\Metadata\DescribeFormFactoryInterface
     */
    public function getDescribeFormFactory();
}
