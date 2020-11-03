<?php


class Route
{

    protected string $_uri;

    public static function instanceRoute()
    {
        $forceInstallation = false;

        if (Install::isInstallationRequired()) {
            $forceInstallation = true;
        }

        return new Route($forceInstallation);
    }

    /**
     * Route constructor.
     * @param bool $forceInstallation
     */
    private function __construct($forceInstallation = false)
    {
        if ($forceInstallation) {
            return $this->_uri = 'Installation';
        }
    }

    public function getUri(): string
    {
        return $this->_uri;
    }


}