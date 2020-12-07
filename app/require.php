<?php
spl_autoload_register(function ($class) {
    require_once "../app/config/Config.php";
    require_once "../app/lib/" . $class . ".php";
});
$init = new Core();//Init Core Class