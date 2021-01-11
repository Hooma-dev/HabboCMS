<?php

namespace app\simpleroute;


use app\lib\classes\Install;

class Route
{

    protected string $_uri;
    protected string $_fullUrl;

    /**
     * Instantiate Route Class when Install isn't required anymore
     *
     * @return Route
     */
    public static function instanceRoute(): Route
    {
        $forceInstallation = false;

        if (Install::isInstallationRequired()) {
            $forceInstallation = true;
        }

        return new Route(false);
    }

    /**
     * Route constructor.
     *
     * @param bool $forceInstallation
     */
    private function __construct($forceInstallation = false)
    {
        $this->_uri = $_GET['route'];

        if ($forceInstallation) {
            $this->_uri = 'Installation';
        }

        $this->_uri = trim($this->_uri, '/');

        return true;
    }


    public function getUri(): string
    {
        return $this->_uri;
    }

    public function getFullUrlInformation(): string
    {

    }


}