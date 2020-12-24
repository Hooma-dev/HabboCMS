<?php

if(!isset($_GET['route']) || empty($_GET['route'])){
    $_GET['route'] = 'index';
}

$DEFAULTPATH = (__DIR__);
$appFolder = $DEFAULTPATH . '/app';

define('CONFIGFILE', 'NewConfig');
define('LOCALPATH', __DIR__);
define('APPPATH', LOCALPATH.'/app');
define('PAGEPATH', LOCALPATH.'/www/pages');
define('WWWPATH', LOCALPATH.'/www');

spl_autoload_register(function ($class_name) {
    include LOCALPATH . '/' . $class_name . '.php';
});

require_once LOCALPATH . '/vendor/autoload.php';

$route = app\simpleroute\Route::instanceRoute();
$controllerName = 'app\\lib\\controller\\' . $route->getUri() . 'Controller';

if(class_exists($controllerName)){
    $controller = new $controllerName;
}

//$view = new \app\simpleroute\View();
//$view->callView($route->getUri() . '/' . $route->getUri());
