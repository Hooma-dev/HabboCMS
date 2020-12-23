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

require_once APPPATH . '/simpleroute/Route.php';
require_once APPPATH . '/simpleroute/View.php';

require_once APPPATH . '/lib/classes/Install.php';

$route = Route::instanceRoute();

if(file_exists(APPPATH . '/lib/controller/' . $route->getUri() . 'Controller.php')){
    require_once APPPATH . '/lib/controller/' . $route->getUri() . 'Controller.php';
}

$view = new View();
$view->callView($route->getUri() . '/' . $route->getUri());
