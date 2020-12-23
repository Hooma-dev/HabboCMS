<?php

namespace app\lib\classes;

class InputHandler
{

    private array $_ruleTemplate = [
        'specialChars' => true,
        'maxStrlen' => 12,
        'minStrlen' => 2,
        'required' => false,
    ];

    private array $_rules = array();

    /**
     * @param string $inputType
     * @param string $inputName
     * @param array $rules
     * @param array $attributes
     */
    protected function addInput(string $inputType = 'text', string $inputName, array $rules = array(), array $attributes = array())
    {
        return self::createElement($inputType, $inputName, $rules, $attributes);
    }

    protected function createElement(string $inputType, string $inputName, array $rules, array $attributes)
    {
        self::createRuleOnElement($rules);

        return '<input type="'.$inputType.'" name="'.$inputName.'" />';
    }

    protected function createRuleOnElement(array $rules)
    {
        foreach ($rules as $key => $ruleValue) {
            if (!array_key_exists($key, $this->_ruleTemplate)) {
                continue;
            }

            $this->_rules[$key] = $ruleValue;
        }
    }
}