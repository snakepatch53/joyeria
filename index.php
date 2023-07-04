<?php
//show errors
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
ob_start();
session_start();
// definimos la zona horaria
date_default_timezone_set('America/Guayaquil');
// cargamos el autoload de composer
require_once __DIR__ . '/vendor/autoload.php';

// Variables globales
$PATH_DAO = './src/dao/';
$PATH_SERVICES = './src/services/';
$PATH_ROUTES = './src/routes/';
$_TEMPLATE_SERVICES_PATH = './src/services/';



// cargamos las funciones
require_once(__DIR__ . '/src/functions/RouterAdapter.php');
require_once(__DIR__ . '/src/functions/utils.php');
require_once(__DIR__ . '/src/dao/MysqlAdapter.php');
require_once(__DIR__ . '/src/functions/middlewares.php');

// cargamos las variables de entorno
$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();

// creamos el router
$router = new \Bramus\Router\Router();
$radapter = new RAdapter($router, $_TEMPLATE_SERVICES_PATH, $_ENV['HTTP_DOMAIN']);

// declaramos las rutas
require_once(__DIR__ . '/includes.php');

// iniciamos el router xd
$router->run();
