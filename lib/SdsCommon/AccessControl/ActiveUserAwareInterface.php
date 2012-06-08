<?php

namespace SdsCommon\AccessControl;

interface ActiveUserAwareInterface{  
    
    public function setActiveUser(RoleAwareUserInterface $activeUser);
}
