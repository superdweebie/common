<?php

namespace SdsCommon\ActiveUser;

use SdsCommon\User\UserInterface;

interface DefaultUserAwareInterface{  
    
    public function setDefaultUser(UserInterface $defaultUser);
}
