<?php

namespace SdsCommon\Stamp;

use SdsCommon\User\UserInterface;

interface CreatedByInterface{
    
    public function setCreatedBy(UserInterface $user);
        
    public function getCreatedBy();
}