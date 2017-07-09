<?php

use Phalcon\Di;
use Phalcon\Di\FactoryDefault;
use Phalcon\Loader;

ini_set("display_errors", 1);
error_reporting(E_ALL);

define("ROOT_PATH", __DIR__);
define('BASE_PATH', ROOT_PATH . '/..');
define('APP_PATH', BASE_PATH . '/app');

set_include_path(
    ROOT_PATH . "/../app". PATH_SEPARATOR . ROOT_PATH . PATH_SEPARATOR . get_include_path()
);
$di = new FactoryDefault();

include ROOT_PATH . '/../app/config/services.php';

$config = $di->getConfig();

include ROOT_PATH . "/../app/config/config.php";
include ROOT_PATH . "/../app/config/loader.php";


Di::reset();

// Add any needed services to the DI here

Di::setDefault($di);
