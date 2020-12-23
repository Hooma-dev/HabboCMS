<?php


class Install
{
    private static function instanceInstallation()
    {

    }

    /**
     * Force installationpage when there is no CONFIGFILE
     * CONFIGFILE is a constant with the file name that is required
     *
     * @return bool
     */
    public static function isInstallationRequired(): bool
    {
        if (!file_exists(APPPATH . '/' . CONFIGFILE)) {
            return true;
        }

        return false;
    }

    private function __construct()
    {

    }
}