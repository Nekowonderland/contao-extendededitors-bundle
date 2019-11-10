<?php

namespace Nekowonderland\ExtendedEditorsBundle\ContaoManager;

use Contao\CoreBundle\ContaoCoreBundle;
use Contao\ManagerBundle\ContaoManagerBundle;
use Contao\ManagerPlugin\Bundle\BundlePluginInterface;
use Contao\ManagerPlugin\Bundle\Config\BundleConfig;
use Contao\ManagerPlugin\Bundle\Parser\ParserInterface;
use Nekowonderland\ExtendedEditorsBundle\DependencyInjection\ExtendedEditorsExtension;

/**
 * Class Plugin
 */
class Plugin implements BundlePluginInterface
{
    /**
     * {@inheritdoc}
     */
    public function getBundles(ParserInterface $parser)
    {
        return [
            BundleConfig::create(ExtendedEditorsExtension::class)
                        ->setLoadAfter(
                            [
                                ContaoCoreBundle::class,
                                ContaoManagerBundle::class,
                            ]
                        )
                        ->setReplace(
                            [
                                'multicolumnwizard',
                            ]
                        ),
        ];
    }
}
