<?php
require('config.php');
spl_autoload_register(function($class){
    if(file_exists('Core/'.$class.'.php')){
        require 'Core/'.$class.'.php';
    }elseif(file_exists('Models/'.$class.'.php')){
        require 'Models/'.$class.'.php';
    }elseif(file_exists('Controllers/'.$class.'.php')){
        require 'Controllers/'.$class.'.php';
    }
});

$core = new Core;
$core->run();