<?php

use Core\Session;
use Core\ValidationException;

session_start();

const BASE_PATH = __DIR__ . '/../';

define('ROOT_PATH', dirname(__FILE__) . DIRECTORY_SEPARATOR);
define('VIEW_PATH', ROOT_PATH . 'Views' . DIRECTORY_SEPARATOR);

require BASE_PATH . 'Core/functions.php';
require base_path('Enums/StatusCodes.php');

require base_path('vendor/autoload.php');

$config = require base_path('config.php');

$_SESSION['app_base_url'] = $config['app']['url'];

spl_autoload_register(function ($class) {
    $class = str_replace('\\', DIRECTORY_SEPARATOR, $class);

    require base_path("{$class}.php");
});

require base_path('bootstrap.php');

$router = new \Core\Router();

$routes = require base_path('web/routes.php');

$uri = parse_url($_SERVER['REQUEST_URI'])['path'];

$method = $_POST['_method'] ?? $_SERVER['REQUEST_METHOD'];

try {
    $router->route($uri, $method);
} catch (ValidationException $exception) {
    Session::flash('errors', $exception->errors);
    Session::flash('old', $exception->old);

    return redirect($router->previousUrl());
}

Session::unsetFlash();

require base_path('Models/Model.php');