<?php

namespace Matthewkp\EzLoginByEmailBundle\DependencyInjection\Compiler;

use Matthewkp\EzLoginByEmailBundle\Security\RepositoryAuthenticationProvider;
use Matthewkp\EzLoginByEmailBundle\Security\UserProvider;
use Symfony\Component\DependencyInjection\Compiler\CompilerPassInterface;
use Symfony\Component\DependencyInjection\ContainerBuilder;

class OverrideServiceCompilerPass implements CompilerPassInterface
{
    public function process(ContainerBuilder $container)
    {
        $definition = $container->getDefinition('security.authentication.provider.dao');
        $definition->setClass(RepositoryAuthenticationProvider::class);

        $definition = $container->getDefinition('ezpublish.security.user_provider');
        $definition->setClass(UserProvider::class);
    }
}
