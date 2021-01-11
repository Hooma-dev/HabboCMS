<?php


namespace app\lib\controller;


class TestController extends ControllerInterface
{
    private string $_page;
    private string $_errors;

    public function __construct()
    {
        $this->_page = 'test.twig';

        if (isset($_POST['TestInputBtn'])) {
            if($this->validateInput($_POST['TestInput'])){

            }
        }

        return self::render($this->_page, [
            'errorMessages' => $this->getErrorMessages()
        ]);
    }

    protected function render(string $name, array $vars = [])
    {
        $this->callTemplate($name, $vars);
    }
}