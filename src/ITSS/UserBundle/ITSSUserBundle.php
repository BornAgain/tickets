<?php

namespace ITSS\UserBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class ITSSUserBundle extends Bundle {

    public function getParent() {
        return 'FOSUserBundle';
    }

}
