<?php

define('WEBROOT', str_replace("public/index.php", "", $_SERVER["SCRIPT_NAME"]));
define('ROOT', str_replace("public/index.php", "", $_SERVER["SCRIPT_FILENAME"]));
require ('../vendor/autoload.php');
use chain_gang\Router;
use chain_gang\Request;
use chain_gang\Dispatcher;
$dispatch = new Dispatcher();
$dispatch->dispatch();

?>