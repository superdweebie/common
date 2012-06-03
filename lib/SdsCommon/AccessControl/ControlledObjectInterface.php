<?php

namespace SdsCommon\AccessControl;

use SdsCommon\User\UserInterface;

interface ControlledObjectInterface{

    public function setZone($zone);
    
    public function getZone();
    
    public function setState($state);
    
    public function getState();
    
    public function addPermission($permission);
    
    public function addPermissions(array $permissions = array());
    
    public function getPermissions();
    
    public function getUserPermissions(UserInterface $user = null, $state = null);
    
    public function isActionAllowed($action, $state = null, UserInterface $user = null);     
}
