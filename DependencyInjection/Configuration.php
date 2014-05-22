<?php

namespace CiscoSystems\SalesForceBundle\DependencyInjection;

use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;
use Symfony\Component\Config\Definition\Builder\ArrayNodeDefinition;


/**
 * This is the class that validates and merges configuration from your app/config files
 *
 * To learn more see {@link http://symfony.com/doc/current/cookbook/bundles/extension.html#cookbook-bundles-extension-config-class}
 */
class Configuration implements ConfigurationInterface
{
    /**
     * {@inheritDoc}
     */
    public function getConfigTreeBuilder()
    {
        $treeBuilder = new TreeBuilder();
        $rootNode = $treeBuilder->root('cisco_systems_sales_force', 'array');

        $this->addSoapApiClientSection( $rootNode );
        $this->addMetadataSection( $rootNode );

        return $treeBuilder;
    }

    private function addSoapApiClientSection( ArrayNodeDefinition $rootNode )
    {
        $rootNode
            ->children()
                ->arrayNode('soap_api_client')
                    ->children()
                        ->scalarNode('classname')->defaultValue('Codemitte\\ForceToolkit\\Soap\\Client\\PartnerClient')->end()
                        ->scalarNode('connection_ttl')->defaultValue(28800)->end()
                        ->scalarNode('service_location')->defaultNull()->end()
                        ->scalarNode('wsdl_location')->isRequired()->end()
                        ->arrayNode('api_users')
                            ->children()
                                ->arrayNode('default')
                                    ->children()
                                        ->scalarNode('username')->end()
                                        ->scalarNode('password')->end()
                                    ->end()
                                ->end()
                                ->arrayNode('locales')
                                    ->useAttributeAsKey('locale')
                                    ->prototype('array')
                                        ->children()
                                            ->scalarNode('locale')->end()
                                            ->scalarNode('username')->end()
                                            ->scalarNode('password')->end()
                                        ->end()
                                    ->end()
                                ->end()
                            ->end()
                        ->end()
                    ->end()
                ->end()
            ->end()
        ->end();
    }

    private function addMetadataSection( ArrayNodeDefinition $rootNode )
    {
        $rootNode
            ->children()
                ->arrayNode('metadata')
                    ->addDefaultsIfNotSet()
                    ->children()
                        ->scalarNode('cache_service_id')->cannotBeEmpty()->defaultValue('salesforce.metadata.file_cache')->end()
                        ->scalarNode('cache_location')->cannotBeEmpty()->defaultValue('%kernel.root_dir%/cache/forcetk')->end()
                        ->scalarNode('cache_ttl')->cannotBeEmpty()->defaultValue(-1)->end()
                    ->end()
                ->end()
            ->end()
        ->end();
    }
}
