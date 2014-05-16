<?php
namespace CiscoSystems\SalesForceBundle\ForceToolkit\Soap\Mapping\Base;

use CiscoSystems\SalesForceBundle\Soap\Mapping\ClassInterface;

class LoginScopeHeader implements ClassInterface
{
    /**
     *
     * @var ID $organizationId
     */
    private $organizationId;

    /**
     *
     * @var ID $portalId
     */
    private $portalId;

    /**
     *
     * @param ID $organizationId
     * @param ID $portalId
     *
     * @access public
     */
    public function __construct($organizationId, $portalId)
    {
        $this->organizationId = $organizationId;
        $this->portalId       = $portalId;
    }

    /**
     * @return \CiscoSystems\SalesForceBundle\ForceToolkit\Soap\Mapping\Base\ID
     */
    public function getOrganizationId()
    {
        return $this->organizationId;
    }

    /**
     * @return \CiscoSystems\SalesForceBundle\ForceToolkit\Soap\Mapping\Base\ID
     */
    public function getPortalId()
    {
        return $this->portalId;
    }

}
