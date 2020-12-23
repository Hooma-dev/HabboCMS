<?php

namespace app\lib\controller;

abstract class ControllerInterface extends \app\lib\classes\InputHandler
{
    abstract public function addInputElement();

    protected function validateData() {
        echo "test";
    }



}