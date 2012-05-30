<?php

namespace SdsCommon\Stamp;

use SdsCommon\User\UserInterface;

interface UpdatedByInterface{
    
    public function setUpdatedBy(UserInterface $user);
        
    public function getUpdatedBy();
}
