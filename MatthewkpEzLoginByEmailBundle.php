<?php

namespace Matthewkp\EzLoginByEmailBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Matthewkp\EzLoginByEmailBundle\DependencyInjection\Compiler\OverrideServiceCompilerPass;

class MatthewkpEzLoginByEmailBundle extends Bundle
{
    public function build(ContainerBuilder $container)
    {
        parent::build($container);

        $container->addCompilerPass(new OverrideServiceCompilerPass());
    }
}
