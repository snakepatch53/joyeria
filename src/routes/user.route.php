<?php
$radapter->post('/user/login', fn (...$args) => UserService::login(...$args));
$radapter->post('/user/logout', fn () => UserService::logout());
$radapter->post('/user/select', fn (...$args) => UserService::select(...$args));
// need to be logged
$radapter->post('/user/insert', fn () => middlewareSessionServicesLogin(), fn (...$args) => UserService::insert(...$args));
$radapter->post('/user/update', fn () => middlewareSessionServicesLogin(), fn (...$args) => UserService::update(...$args));
$radapter->post('/user/delete', fn () => middlewareSessionServicesLogin(), fn (...$args) => UserService::delete(...$args));
