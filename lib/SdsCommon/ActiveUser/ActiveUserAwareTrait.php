<?php

namespace SdsCommon\ActiveUser;

use SdsCommon\User\UserInterface;

trait ActiveUserAwareTrait {

    protected $activeUser;
        
    public function setActiveUser(UserInterface $activeUser){
        $this->activeUser = $activeUser;
    }
}
