<?php

namespace SdsCommon\AccessControl;

interface PermissionInterface{
               
    public function getState();

    public function getAction();

    public function getRole();
    
    public function __construct(Role $role, $action, $state = null);   
}
