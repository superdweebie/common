<?php

namespace SdsCommon\ActiveUser;

use SdsCommon\User\UserInterface;

interface ActiveUserInterface{

    public function getActiveUser();  
    
    public function setActiveUser(UserInterface $user);
}
