<?php

namespace SdsCommon\ActiveUser;

use SdsCommon\User\UserInterface;

interface ActiveUserAwareInterface{  
    
    public function setActiveUser(UserInterface $activeUser);
}
