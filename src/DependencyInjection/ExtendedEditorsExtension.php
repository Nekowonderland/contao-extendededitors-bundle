<?php

namespace Nekowonderland\ExtendedEditorsBundle\DependencyInjection;

use Symfony\Component\Config\FileLocator;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Extension\Extension;
use Symfony\Component\DependencyInjection\Loader\YamlFileLoader;

/**
 * Class MultiColumnWizardExtension
 */
class ExtendedEditorsExtension extends Extension
{
    /**
     * The config files.
     *
     * @var array
     */
    private $files = [
//        'listener.yml',
//        'services.yml',
    ];

    /**
     * {@inheritdoc}
     */
    public function getAlias()
    {
        return 'extendededitors-bundle';
    }

    /**
     * Loads a specific configuration.
     *
     * @throws \InvalidArgumentException When provided tag is not defined in this extension
     *
     * @throws \Exception
     */
    public function load(array $configs, ContainerBuilder $container)
    {
        $loader = new YamlFileLoader(
            $container,
            new FileLocator(__DIR__ . '/../Resources/config')
        );

        foreach ($this->files as $file) {
            $loader->load($file);
        }
    }
}
