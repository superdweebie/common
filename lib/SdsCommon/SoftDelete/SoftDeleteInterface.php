<?php

namespace SdsCommon\SoftDelete;

interface SoftDelteInterface{
    
    public function setDeleted($deleted);
    
    public function getDeleted();
    
    public function delete();
    
    public function restore();
}
