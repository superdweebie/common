<?php

namespace SdsCommon\AccessControl;

interface RoleInterface{

    public function getName();
    
    public function getZone();   
    
    public function __construct($name, $zone = null);    
}
