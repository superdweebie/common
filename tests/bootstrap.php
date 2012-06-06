<?php

$file = __DIR__.'/../../../autoload.php';   // Composer autoloading

if (!file_exists($file)) {
    throw new RuntimeException('Attempted to install dependencies via  
        composer (/../../../autoload.php), but failed.');
}    

require_once $file;
