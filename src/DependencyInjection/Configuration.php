<?php

namespace Habibun\ValidationBundle\DependencyInjection;

use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;

class Configuration implements ConfigurationInterface
{
    /**
     * {@inheritDoc}
     */
    public function getConfigTreeBuilder()
    {
        $treeBuilder = new TreeBuilder();
        $rootNode = $treeBuilder->root('habibun_validation');

        $rootNode
            ->children()
            ->booleanNode('config_boolean')->defaultFalse()->info('Config boolean value')->end()
            ->integerNode('config_integer')->defaultValue(0)->info('Config integer value')->end()
            ->scalarNode('rule_provider')->defaultNull()->end()
            ->end()
            ;

        return $treeBuilder;
    }
}
