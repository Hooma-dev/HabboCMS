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

        return new Route($forceInstallation);
    }

    /**
     * Route constructor.
     *
     * @param bool $forceInstallation
     */
    private function __construct($forceInstallation = false)
    {
        if ($forceInstallation) {
            return $this->_uri = 'Installation';
        }

        return $this->_uri = $_GET['route'];
    }

    public function getUri(): string
    {
        return $this->_uri;
    }

    public function getFullUrlInformation(): string
    {

    }


}