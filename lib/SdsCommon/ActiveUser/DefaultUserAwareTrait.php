<?php

namespace SdsCommon\ActiveUser;

use SdsCommon\User\UserInterface;

trait DefaultUserAwareTrait {

    protected $defaultUser;
        
    public function setDefaultUser(UserInterface $defaultUser){
        $this->defaultUser = $defaultUser;
    }
}
