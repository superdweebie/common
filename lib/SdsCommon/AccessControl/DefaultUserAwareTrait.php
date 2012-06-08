<?php

namespace SdsCommon\AccessControl;

trait DefaultUserAwareTrait {

    protected $defaultUser;
        
    public function setDefaultUser(RoleAwareUserInterface $defaultUser){
        $this->defaultUser = $defaultUser;
    }
}
