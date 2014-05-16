<?php
namespace CiscoSystems\SalesForceBundle\ForceToolkit\Soap\Client\Connection\Storage;

use CiscoSystems\SalesForceBundle\ForceToolkit\Soap\Client\Connection\SfdcConnectionInterface;

interface StorageInterface
{
    /**
     * @abstract
     * @param string $locale
     * @return boolean
     */
    public function has($locale);

    /**
     * @abstract
     *
     * @param string $locale
     * @return SfdcConnectionInterface
     */
    public function get($locale);

    /**
     * @abstract
     * @param string $locale
     * @return void
     */
    public function remove($locale);

    /**
     * @abstract
     * @param string $locale
     * @param \CiscoSystems\SalesForceBundle\ForceToolkit\Soap\Client\Connection\SfdcConnectionInterface $connection
     * @return void
     */
    public function set($locale, SfdcConnectionInterface $connection);
}
