<?php

namespace app\lib\controller;

use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Error\SyntaxError;

class InstallationController extends ControllerInterface
{
    private string $host;
    private string $user;
    private string $password;
    private string $port;
    private string $dbname;

    public function __construct()
    {
        self::render('Installation.twig', ['testVar' => 'yolo']);
    }

    protected function render(string $name, array $vars = null)
    {
        $this->callTemplate($name, $vars);
    }

}