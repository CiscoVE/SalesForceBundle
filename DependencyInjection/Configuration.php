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
class Configuration
{
    /**
     * {@inheritDoc}
     */
    public function getConfigTree()
    {
        $treeBuilder = new TreeBuilder();
        $rootNode = $treeBuilder->root('cisco_sales_force', 'array');

        $rootNode
            ->children()
                ->arrayNode('soap_api_client')
                    ->isRequired()
                    ->children()
                        ->scalarNode('classname')->defaultValue('Cisco\\SalesForceBundle\\ForceToolkit\\Soap\\Client\\PartnerClient')->end()
                        ->scalarNode('connection_ttl')->defaultValue(28800)->end()
                        ->scalarNode('service_location')->defaultNull()->end()
                        ->scalarNode('wsdl_location')->isRequired()->end()
                        ->arrayNode('api_users')
                            ->isRequired()
                            ->children()
                                ->arrayNode('default')
                                    ->isRequired()
                                    ->children()
                                        ->scalarNode('username')->end()
                                        ->scalarNode('password')->end()
                                    ->end()
                                ->end()
                                ->arrayNode('locales')
                                    ->isRequired()
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
                ->arrayNode('metadata')
                    ->isRequired()
                    ->children()
                        ->scalarNode('cache_service_id')->isRequired()->end()
                        ->scalarNode('cache_location')->defaultValue('%kernel.root_dir%/cache/forcetk')->end()
                        ->scalarNode('cache_ttl')->defaultValue(-1)->end()
                    ->end()
                ->end()
            ->end()
        ->end();

        // Here you should define the parameters that are allowed to
        // configure your bundle. See the documentation linked above for
        // more information on that topic.

        return $treeBuilder->buildTree();
    }
}
