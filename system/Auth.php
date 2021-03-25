<?php

namespace App\Core;

class Auth
{
    public static function isAuthorized($uri, $skippedUri)
    {
        if (in_array($uri, $skippedUri)) {
            return 1;
        }

        return static::isAuthenticated();
    }

    public static function isAuthenticated()
    {
        return 1;
    }
}
