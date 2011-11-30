<?php

namespace Migol\UserBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class MigolUserBundle extends Bundle
{
    public function getParent()
    {
        return 'FOSUserBundle';
    }
}
