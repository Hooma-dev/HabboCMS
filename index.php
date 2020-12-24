<?php

use app\simpleroute\Route;
use Twig\Environment;
use Twig\Loader\FilesystemLoader;

if (!isset($_GET['route']) || empty($_GET['route'])) {
    $_GET['route'] = 'index';
}

$DEFAULTPATH = (__DIR__);
$appFolder = $DEFAULTPATH . '/app';

define('CONFIGFILE', 'NewConfig');
define('LOCALPATH', __DIR__);
define('APPPATH', LOCALPATH . '/app');
define('TEMPLATEPATH', LOCALPATH . '/www/template');
define('WWWPATH', LOCALPATH . '/www');

spl_autoload_register(function ($class_name) {
    if (file_exists(LOCALPATH . '/' . $class_name. '.php')) {
        include LOCALPATH . '/' . $class_name . '.php';
    }
});

require_once LOCALPATH . '/vendor/autoload.php';

$route = Route::instanceRoute();
$controllerName = 'app\\lib\\controller\\' . ucfirst($route->getUri()) . 'Controller';

if (class_exists($controllerName)) {
    $controller = new $controllerName;
} else {
    $loader = new FilesystemLoader(WWWPATH . '/template/');
    $twig = new Environment($loader);

    $page = '404.twig';

    if (file_exists(TEMPLATEPATH . '/' . $route->getUri())) {
        $page = $route->getUri();
    }

    echo $twig->render($page);
}

//$view = new \app\simpleroute\View();
//$view->callView($route->getUri() . '/' . $route->getUri());
