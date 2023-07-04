<?php
$_TEMPLATE_SERVICES_PATH = './src/services/';
$radapter = new RAdapter($router, $_TEMPLATE_SERVICES_PATH, $_ENV['HTTP_DOMAIN']);

// CONFIGURATION
$radapter->getHTML('/configuration', 'configuration');

// INFO
$radapter->post('/info/select', fn (...$args) => InfoService::select(...$args));
$radapter->post('/info/update', fn (...$args) => InfoService::update(...$args));

// USER
$radapter->post('/user/login', fn (...$args) => UserService::login(...$args));
$radapter->post('/user/logout', fn () => UserService::logout());
$radapter->post('/user/select', fn (...$args) => UserService::select(...$args));
// need to be logged
$radapter->post('/user/insert', fn () => middlewareSessionServicesLogin(), fn (...$args) => UserService::insert(...$args));
$radapter->post('/user/update', fn () => middlewareSessionServicesLogin(), fn (...$args) => UserService::update(...$args));
$radapter->post('/user/delete', fn () => middlewareSessionServicesLogin(), fn (...$args) => UserService::delete(...$args));
