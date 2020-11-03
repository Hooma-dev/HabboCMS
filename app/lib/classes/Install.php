<?php


class Install
{
    private static function instanceInstallation()
    {

    }

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