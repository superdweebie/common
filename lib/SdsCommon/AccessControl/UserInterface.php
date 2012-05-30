<?php

namespace SdsCommon\AccessControl;

interface UserInterface{

    public function addRoles(array $roles = array());
    
    public function addRole($role);
       
    public function removeRole($role);
    
    public function getRoles();
    
    public function getRolesInZone($zone = null);
    
    public function hasRole($role);    
}
