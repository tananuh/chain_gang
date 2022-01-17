<?php

define('WEBROOT', str_replace("public/index.php", "", $_SERVER["SCRIPT_NAME"]));
define('ROOT', str_replace("public/index.php", "", $_SERVER["SCRIPT_FILENAME"]));
require ('../vendor/autoload.php');
// require(ROOT . 'Config/core.php');
use chain_gang\Config\Database;
use chain_gang\Core\Controller;
use chain_gang\Core\Bicycle;
// require(ROOT . 'router.php');
use chain_gang\Router;

// require(ROOT . 'request.php');
use chain_gang\Request;
// require(ROOT . 'dispatcher.php');
use chain_gang\Dispatcher;
$dispatch = new Dispatcher();
$dispatch->dispatch();

?>