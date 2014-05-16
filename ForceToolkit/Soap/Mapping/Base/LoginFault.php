<?php
namespace CiscoSystems\SalesForceBundle\ForceToolkit\Soap\Mapping\Base;

use \RuntimeException;

use CiscoSystems\SalesForceBundle\Soap\Mapping\ClassInterface;

class LoginFault extends RuntimeException implements ClassInterface { }
