<?php

namespace Nekowonderland\ExtendedEditorsBundle;

use Nekowonderland\ExtendedEditorsBundle\DependencyInjection\ExtendedEditorsExtension;
use Symfony\Component\Console\Application;
use Symfony\Component\HttpKernel\Bundle\Bundle;

/**
 * Class MultiColumnWizardBundle
 *
 * @package MenAtWork\MultiColumnWizardBundle
 */
class ExtendedEditorsBundle extends Bundle
{
    /**
     * {@inheritdoc}
     */
    public function getContainerExtension()
    {
        return new ExtendedEditorsExtension();
    }

    /**
     * {@inheritdoc}
     */
    public function registerCommands(Application $application)
    {
        // disable automatic command registration
    }
}
