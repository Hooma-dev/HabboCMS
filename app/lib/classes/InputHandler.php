<?php

namespace app\lib\classes;

use app\lib\controller\ControllerInterface;

require_once LOCALPATH . '/app/lib/helpers/errormessages.php';

class InputHandler
{
    private array $_ruleTemplate = [
        'specialChars' => true,
        'maxStrlen' => 12,
        'minStrlen' => 2,
        'required' => false,
    ];

    private array $_errorTemplate;

    private $_data;

    private array $_rules = array();

    private array $_errors = array();

    /**
     * Only instancing this Class by a ControllerInterface
     *
     * @param ControllerInterface $class
     * @return InputHandler
     */
    public static function instanceInputHandler(ControllerInterface $class): InputHandler {
        return new InputHandler();
    }

    /**
     * @param $data
     * @param array $rules
     * @return bool
     */
    public function validateInputData($data, array $rules = []): bool
    {
        // Checks if there customizate rules. If not get the template
        $this->_rules = (empty($rules)) ? $this->_ruleTemplate : $rules;

        $this->_data = $data;

        $this->_errorTemplate = errorMessages();

        if (!self::validateInputOnRoles()) {
            return false;
        }

        return true;
    }

    private function validateInputOnRoles(): bool
    {
        if(!self::isDataRequired()){
            return false;
        }

        if (!self::isDataLengthValid()) {
            return false;
        }

        return true;
    }

    private function isDataLengthValid(): bool
    {
        $errors = null;

        if (strlen($this->_data) < $this->_rules['minStrlen']) {
            $errors['minStrlen'] = $this->_errorTemplate['Input']['minStrlen'];
        } else if (strlen($this->_data) > $this->_rules['maxStrlen']) {
            $errors['maxStrlen'] = $this->_errorTemplate['Input']['maxStrlen'];
        }



        return true;
    }

    private function isDataRequired(): bool
    {
        $errors = null;

        if(empty($this->_data) || $this->_data === null){
            $errors['required'] = $this->_errorTemplate['Input']['required'];
        }



        return true;
    }

    private function setErrorMessages(array $errors): array
    {

    }

    public function getErrorMessages(): array
    {
        return $this->_errors;
    }
}