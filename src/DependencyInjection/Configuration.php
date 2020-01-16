<?php

namespace XKojiMedia\Bundle\AltairGraphqlBundle\DependencyInjection;

use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;

class Configuration implements ConfigurationInterface
{
    public function getConfigTreeBuilder()
    {
        $treeBuilder = new TreeBuilder('altair_graphql');

        $treeBuilder->getRootNode()
            ->children()
                ->scalarNode('endpoint')
                    ->defaultValue('/graphql')
                ->end()
            ->end();

        return $treeBuilder;
    }
}