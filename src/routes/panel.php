<?php
$_TEMPLATE_PANEL_PATH = './src/templates/panel.pages/';
$radapter = new RAdapter($router, $_TEMPLATE_PANEL_PATH, $_ENV['HTTP_DOMAIN']);

// HOME
$radapter->getHTML('/panel/login', 'login', fn () => middlewareSessionLogout());

$radapter->getHTML('/panel', 'home', fn () => middlewareSessionLogin(), function ($DATA) {
    return [
        'info' => (new InfoDao($DATA['mysqlAdapter']))->select(),
    ];
});

// INFO
$radapter->getHTML('/panel/info', 'info', fn () => middlewareSessionTipoUser_login(), function ($DATA) {
    return [
        'info' => (new InfoDao($DATA['mysqlAdapter']))->select(),
    ];
});

// SLIDER
$radapter->getHTML('/panel/slider', 'slider', fn () => middlewareSessionTipoUser_login(), function ($DATA) {
    return [
        'info' => (new InfoDao($DATA['mysqlAdapter']))->select(),
    ];
});

// SOCIAL
$radapter->getHTML('/panel/social', 'social', fn () => middlewareSessionTipoUser_login(), function ($DATA) {
    return [
        'info' => (new InfoDao($DATA['mysqlAdapter']))->select(),
    ];
});

// HORAS
$radapter->getHTML('/panel/horas', 'horas', fn () => middlewareSessionTipoUser_login(), function ($DATA) {
    return [
        'info' => (new InfoDao($DATA['mysqlAdapter']))->select(),
    ];
});

// SERVICIOS
$radapter->getHTML('/panel/servicios', 'servicios', fn () => middlewareSessionTipoUser_login(), function ($DATA) {
    return [
        'info' => (new InfoDao($DATA['mysqlAdapter']))->select(),
    ];
});

// USER
$radapter->getHTML('/panel/user', 'user', fn () => middlewareSessionTipoUser_login(), function ($DATA) {
    return [
        'info' => (new InfoDao($DATA['mysqlAdapter']))->select(),
    ];
});

// CLIENTES
$radapter->getHTML('/panel/clientes', 'clientes', fn () => middlewareSessionLogin(), function ($DATA) {
    return [
        'info' => (new InfoDao($DATA['mysqlAdapter']))->select(),
    ];
});

// MENSAJES
$radapter->getHTML('/panel/mensajes', 'mensajes', fn () => middlewareSessionLogin(), function ($DATA) {
    return [
        'info' => (new InfoDao($DATA['mysqlAdapter']))->select(),
    ];
});

// CITAS
$radapter->getHTML('/panel/citas', 'citas', fn () => middlewareSessionLogin(), function ($DATA) {
    return [
        'info' => (new InfoDao($DATA['mysqlAdapter']))->select()
    ];
});
