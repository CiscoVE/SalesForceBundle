<?php
namespace CiscoSystems\SalesForceBundle\Common\Cache;

interface GenericCachedInterface
{
    /**
     * @abstract
     * @param string/int $timestamp
     * @return bool
     */
    public function isFresh($timestamp);
}
