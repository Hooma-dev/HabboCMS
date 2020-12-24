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
        self::render('index.twig', ['testVar' => 'yolo']);
    }

    public function addInputElement()
    {
        // TODO: Implement addInputElement() method.
    }

    protected function render(string $name, array $vars = null)
    {
        $this->callTemplate($name, $vars);
    }

}