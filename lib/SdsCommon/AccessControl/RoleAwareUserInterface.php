<?php

namespace SdsCommon\AccessControl;

interface RoleAwareUserInterface{

    public function addRoles(array $roles = array());
    
    public function addRole($role);
       
    public function removeRole($role);
    
    public function getRoles();
    
    public function getRolesInZone($zone = null);
    
    public function hasRole($role);    
}
