<?php


class InstallationController
{
    private string $host;
    private string $user;
    private string $password;
    private string $port;
    private string $dbname;


    public function createInput(string $inputType = 'text', string $inputName, array $rules = array(), array $attributes = array())
    {
        return $this->addInput($inputType, $inputName, $rules, $attributes);
    }
}