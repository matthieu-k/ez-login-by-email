# eZ Login by Email
With this bundle users will be able to login with their email or login.

Tested on eZ Platform version 1.10, it should work since eZ Platform 1.
## Install Package
```bash
composer require matthewkp/ez-login-by-email
```
composer require matthewkp/ez-login-by-email
```php
// app/AppKernel.php

class AppKernel extends Kernel
{
    ...
    public function registerBundles()
    {
        ...
        $bundles = array(
            ...
            new Matthewkp\EzLoginByEmailBundle\MatthewkpEzLoginByEmailBundle(),
            ...
        );
        ...
    }
}

## More information
Initially made by https://github.com/eab-dev/LoginByEmailBundle

