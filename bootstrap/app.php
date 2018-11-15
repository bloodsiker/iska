<?php

// Include helpers functions
require_once (ROOT . '/components/helpers.php');
// Main config
$config = config('app');


if($config['debug'] == true) {
    ini_set('display_errors', 1);
    error_reporting(E_ALL);
} else {
    ini_set('display_errors', 0);
    error_reporting(null);
}

date_default_timezone_set($config['timezone']);


// Include file system
require_once(ROOT . '/vendor/autoload.php');

// Start session
Josantonius\Session\Session::init();

//Static Environment Definition
if($config['env'] == 'local') {
    $env = __DIR__ . '/../.env.local';
} elseif ($config['env'] == 'production') {
    $env = __DIR__ . '/../.env';
}

josegonzalez\Dotenv\Loader::load([
    'filepath'  => $env,
    'toEnv'     => true
]);

//Router run
$router = new App\vendor\router\Router();
$router->run();