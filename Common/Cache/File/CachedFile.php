<?php
namespace CiscoSystems\SalesForceBundle\Common\Cache\File;

use
    \SplFileInfo,
    CiscoSystems\SalesForceBundle\Common\Cache\GenericCachedInterface;

class CachedFile extends SplFileInfo implements GenericCachedInterface
{
    /**
     * @param null $timestamp
     * @return bool
     */
    public function isFresh($timestamp)
    {
        return $this->getCTime() < $timestamp;
    }
}
