<?php

namespace app\lib\controller;

use app\lib\classes\InputHandler;
use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Error\SyntaxError;
use Twig\Loader\FilesystemLoader;

abstract class ControllerInterface
{

    private InputHandler $inputHandler;

    abstract protected function render(string $name, array $vars = []);

    /**
     * @param string $name
     * @param array|null $vars
     * @throws LoaderError
     * @throws RuntimeError
     * @throws SyntaxError
     */
    protected function callTemplate(string $name, array $vars = []): void
    {
        $loader = new FilesystemLoader(WWWPATH . '/template/');
        $twig = new Environment($loader);

        echo $twig->render($name, $vars);
    }

    protected function validateInput($data, array $rules = []): bool
    {
        $this->inputHandler = InputHandler::instanceInputHandler($this);

        return $this->inputHandler->validateInputData($data, $rules);
    }

    protected function getErrorMessages(): array
    {
        return $this->inputHandler->getErrorMessages();
    }
}