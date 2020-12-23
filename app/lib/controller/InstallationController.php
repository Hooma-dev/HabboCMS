<?php

namespace app\lib\controller;

class InstallationController extends ControllerInterface
{
    private string $host;
    private string $user;
    private string $password;
    private string $port;
    private string $dbname;

    public function __construct() {

    }

    public function addInputElement()
    {
        // TODO: Implement addInputElement() method.
    }
}