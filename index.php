<?php

$DEFAULTPATH = (__DIR__);
$appFolder = $DEFAULTPATH . '/app';

define('CONFIGFILE', 'newConfig.ini');
define('LOCALPATH', __DIR__);
define('APPPATH', LOCALPATH.'/app');
define('PAGEPATH', LOCALPATH.'/www/pages');
define('WWWPATH', LOCALPATH.'/www');

require_once $appFolder . '/simpleroute/Route.php';
require_once $appFolder . '/simpleroute/View.php';
require_once $appFolder . '/lib/classes/Install.php';

$route = Route::instanceRoute();

if(file_exists(APPPATH . '/lib/controller/' . $route->getUri() . 'Controller.php')){
    require_once APPPATH . '/lib/controller/' . $route->getUri() . 'Controller.php';
}

require_once $appFolder . '/lib/classes/InputHandler.php';

$view = new View();
$view->callView($route->getUri());
