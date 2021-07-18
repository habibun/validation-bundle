<?php

namespace Habibun\ValidationBundle\DependencyInjection;

use Symfony\Component\Config\FileLocator;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Loader\XmlFileLoader;
use Symfony\Component\DependencyInjection\Reference;
use Symfony\Component\HttpKernel\DependencyInjection\Extension;

/**
 * Class HabibunValidationExtension.
 */
class HabibunValidationExtension extends Extension
{
    /**
     * {@inheritDoc}
     */
    public function load(array $configs, ContainerBuilder $container)
    {
        $loader = new XmlFileLoader($container, new FileLocator(__DIR__.'/../Resources/config'));
        $loader->load('services.xml');

        $configuration = $this->getConfiguration($configs, $container);
        $config = $this->processConfiguration($configuration, $configs);

        $definition = $container->getDefinition('habibun_validation.validator');
        if (null !== $config['rule_provider']) {
            $container->setAlias('habibun_validation.rule_provider', $config['rule_provider']);
        }

        $definition->setArgument(1, $config['config_boolean']);
        $definition->setArgument(2, $config['config_integer']);
    }
}
