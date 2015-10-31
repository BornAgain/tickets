<?php

namespace AC\UserBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class ACUserBundle extends Bundle {

    public function getParent() {
        return 'FOSUserBundle';
    }

}
