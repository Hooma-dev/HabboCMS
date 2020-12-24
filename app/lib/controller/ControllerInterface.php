<?php

namespace app\lib\controller;

use app\lib\classes\InputHandler;
use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Error\SyntaxError;
use Twig\Loader\FilesystemLoader;

abstract class ControllerInterface extends InputHandler
{
    abstract protected function addInputElement();

    abstract protected function render(string $name, array $vars = null);

    /**
     * @param string $name
     * @param array|null $vars
     * @throws LoaderError
     * @throws RuntimeError
     * @throws SyntaxError
     */
    protected function callTemplate(string $name, array $vars = null): void
    {
        $loader = new FilesystemLoader(WWWPATH . '/template/');
        $twig = new Environment($loader);

        echo $twig->render($name, $vars);
    }

}