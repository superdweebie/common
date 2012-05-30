<?php

namespace SdsCommon\User;

interface AuthUserInterface{
       
    public function isGuest();

    public function setIsGuest($isGuest);
    
    public function getPassword();
        
    public function setPassword($plaintext);
} 