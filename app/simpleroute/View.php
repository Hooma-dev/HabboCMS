<?php

namespace app\simpleroute;

class View
{

    private string $_view;
    private string $_fileTemplate = '.php';

    private string $_folder;
    private string $_page;

    public function callView(string $uri)
    {
        $uri = explode('/', $uri);

        $this->_folder = $uri[0];
        $this->_page = $uri[1];

        $uri = null;

        if(self::isViewCallable()){
            require_once PAGEPATH . '/' . $this->_folder . '/' . $this->_page . $this->_fileTemplate;
        }
    }

    private function isViewCallable() : bool
    {
        if(file_exists(PAGEPATH . '/' . $this->_folder . '/' . $this->_page . $this->_fileTemplate)){
            return true;
        }

        return false;
    }

}