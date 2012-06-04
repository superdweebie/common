<?php

namespace SdsCommon\AccessControl;

interface PermissionInterface{
               
    public function getState();

    public function getAction();

    public function getRole();
    
    public function __construct(RoleInterface $role, $action, $state = null);   
}
