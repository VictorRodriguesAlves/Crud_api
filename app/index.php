<?php
require('config.php');
spl_autoload_register(function($class){
    if(file_exists('inc/'.$class.'.php')){
        require 'inc/'.$class.'.php';
    }elseif(file_exists('core/'.$class.'.php')){
        require 'core/'.$class.'.php';
    }elseif(file_exists('controller/'.$class.'.php')){
        require 'controller/'.$class.'.php';
    }
});

$core = new Core;
$core->run();
?>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous" defer></script>
