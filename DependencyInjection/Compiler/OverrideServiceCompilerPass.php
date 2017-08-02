<?php

namespace Matthewkp\EzLoginByEmailBundle\DependencyInjection\Compiler;

use Matthewkp\EzLoginByEmailBundle\Security\AuthenticationProvider;
use Symfony\Component\DependencyInjection\Compiler\CompilerPassInterface;
use Symfony\Component\DependencyInjection\ContainerBuilder;

class OverrideServiceCompilerPass implements CompilerPassInterface
{
    public function process(ContainerBuilder $container)
    {
        $definition = $container->getDefinition('security.authentication.provider.dao');
        $definition->setClass(AuthenticationProvider::class);
    }
}
