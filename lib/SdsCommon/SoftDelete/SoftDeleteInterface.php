<?php

namespace SdsCommon\SoftDelete;

interface SoftDeleteInterface{
    
    public function setDeleted($deleted);
    
    public function getDeleted();
    
    public function delete();
    
    public function restore();
}
