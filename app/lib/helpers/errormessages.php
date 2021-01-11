<?php

function errorMessages(): array {
    $errorMessages = array(
        'Input' => array(
            'minStrlen' => 'Deine Eingabe entspricht nicht der Mindestlänge!',
            'maxStrlen' => 'Deine Eingabe entspricht nicht der Maximallänge!',
            'required' => 'Bitte fülle alle Felder aus!'
        )
    );

    return $errorMessages;
}