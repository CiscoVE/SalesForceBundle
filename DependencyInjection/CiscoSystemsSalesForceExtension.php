<?php

namespace CiscoSystems\SalesForceBundle\DependencyInjection;

use Symfony\Component\HttpKernel\DependencyInjection\Extension,
    Symfony\Component\Config\FileLocator,
    Symfony\Component\DependencyInjection\Loader\YamlFileLoader;
use Symfony\Component\DependencyInjection\Loader\XmlFileLoader;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\Config\Definition\Processor;

class CiscoSystemsSalesForceExtension extends Extension
{
    public function load( array $configs, ContainerBuilder $container )
    {
        // Merge data from configuration files, extending files override
        $config = array();
        foreach ( $configs as $subConfig ) $config = array_merge( $config, $subConfig );
        // Load bundle default configuration
        //$loader = new YamlFileLoader( $container, new FileLocator( __DIR__ . '/../Resources/config' ) );
        $loader = new XmlFileLoader($container, new FileLocator(__DIR__ . '/../Resources/config'));


        $processor     = new Processor();
        $configuration = new Configuration();

        $config = $processor->process($configuration->getConfigTree(), $configs);
         $loader->load('services.xml');
        $container->setParameter('salesforce.metadata.cache.ttl', $config['metadata']['cache_ttl']);
        $container->setParameter('salesforce.metadata.cache.service_id', $config['metadata']['cache_service_id']);
        $container->setParameter('salesforce.metadata.cache.location', $config['metadata']['cache_location']);

        $container->setParameter('salesforce.client.class', $config['soap_api_client']['classname']);
        $container->setParameter('salesforce.client.default_api_user', $config['soap_api_client']['api_users']['default']);
        $container->setParameter('salesforce.client.api_users', $config['soap_api_client']['api_users']['locales']);
        $container->setParameter('salesforce.client.service_location', $config['soap_api_client']['service_location']);
        $container->setParameter('salesforce.client.wsdl_location', $config['soap_api_client']['wsdl_location']);
        $container->setParameter('salesforce.client.connection_ttl', $config['soap_api_client']['connection_ttl']);



         if(isset($config['metadata']['cache_service_id']))
{
$container->setAlias('salesforce.metadata.cache', $config['metadata']['cache_service_id']);
}
}
public function getXsdValidationBasePath()
{
return __DIR__.'/../Resources/config/schema';
}





}