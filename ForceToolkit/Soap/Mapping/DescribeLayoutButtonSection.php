<?php
namespace CiscoSystems\SalesForceBundle\ForceToolkit\Soap\Mapping;

use CiscoSystems\SalesForceBundle\Soap\Mapping\ClassInterface;

class DescribeLayoutButtonSection implements ClassInterface
{

    /**
     * @var DescribeLayoutButton $detailButtons
     */
    private $detailButtons;

    /**
     *
     * @param DescribeLayoutButton $detailButtons
     */
    public function __construct($detailButtons)
    {
        $this->detailButtons = $detailButtons;
    }

    /**
     * @return \CiscoSystems\SalesForceBundle\ForceToolkit\Soap\Mapping\DescribeLayoutButton
     */
    public function getDetailButtons()
    {
        return $this->detailButtons;
    }

}
