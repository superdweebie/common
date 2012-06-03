<?php

namespace SdsCommon\Stamp;

interface UpdatedOnInterface{
    
    public function setUpdatedOn($timestamp);
        
    public function getUpdatedOn();
}
