<?php

namespace SdsCommon\User;

interface UserInterface{
    
    public function getUsername();

    public function setUsername($username);
    
    public function isGuest();
}