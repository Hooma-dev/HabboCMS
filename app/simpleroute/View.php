<?php


class View
{

    private string $_view;
    private string $_fileTemplate = '.php';

    public function callView(string $uri){
        $this->_view = $uri . $this->_fileTemplate;

        if(!file_exists(PAGEPATH . '/' . $this->_view)) {
            $this->_view = '/404' . $this->_fileTemplate;
        }

        require_once PAGEPATH . '/' . $this->_view;
    }

}