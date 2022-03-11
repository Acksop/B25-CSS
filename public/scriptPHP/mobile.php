<?php

if (DEV_verificationINCLUSIONS) {
    $page = explode("/", __FILE__);
    $fichier_inclus = array_pop($page);
    echo $fichier_inclus." >>> OK!";
}

function detection_mobile()
{
    if (isset($_SERVER['HTTP_X_WAP_PROFILE']) || isset($_SERVER['HTTP_PROFILE'])) {
        return true;
    }

    if (isset($_SERVER['HTTP_ACCEPT'])) {
        $accept = strtolower($_SERVER['HTTP_ACCEPT']);
        if (strpos($accept, 'wap') !== false) {
            return true;
        }
    }

    if (isset($_SERVER['HTTP_USER_AGENT'])) {
        if (preg_match("/Mobile/", $_SERVER['HTTP_USER_AGENT'])) {
            return true;
        }

        if (preg_match("/Opera Mini/", $_SERVER['HTTP_USER_AGENT'])) {
            return true;
        }

    }

    return false;
}
