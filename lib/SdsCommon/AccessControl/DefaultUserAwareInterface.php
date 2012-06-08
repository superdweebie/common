<?php

namespace SdsCommon\AccessControl;

interface DefaultUserAwareInterface{  
    
    public function setDefaultUser(RoleAwareUserInterface $defaultUser);
}
