<?php

namespace SdsCommon\AccessControl;

trait ActiveUserAwareTrait {

    protected $activeUser;
        
    public function setActiveUser(RoleAwareUserInterface $activeUser){
        $this->activeUser = $activeUser;
    }
}
