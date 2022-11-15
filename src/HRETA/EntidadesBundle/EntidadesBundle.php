<?php

namespace HRETA\EntidadesBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class EntidadesBundle extends Bundle
{
    
    public function getParent() {
        return 'FOSUserBundle';
    }
}
