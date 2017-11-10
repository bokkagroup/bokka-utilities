<?php

/*
Plugin Name:    Bokka Utilities
Plugin URI:     http://bokkagroup.com
Description:
Author:         Bokka Group
Version:        0.0.1
Author URI:     http://bokkagroup.com
License:        GPL2

Bokka Utilities is free software: you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation, either version 2 of the License, or
any later version.

Bokka Utilities is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with Bokka Utilities. If not, see {License URI}.
*/

namespace Bokka\Utilities;

/**
 * Bokka\Utilities\Utilities
 * @version 0.0.1 Singleton
 */
class Utilities {

    private static $instance;

    protected function __construct()
    {
        if (!defined('BOKKA_ENV') && isset($_SERVER) && $_SERVER['HTTP_HOST']) {
            $host = $_SERVER['HTTP_HOST'];

            if ((strpos($host, '.local') !== false) || (strpos($host, '.dev') !== false)) {
                define('BOKKA_ENV', "local");
            } elseif (strpos($host, 'staging') !== false) {
                define('BOKKA_ENV', "staging");
            } else {
                define('BOKKA_ENV', "production");
            }
        }
    }

    /**
     * Singleton instantiation
     * @return [static] instance
     */
    public static function getInstance()
    {
        if (null === static::$instance) {
            static::$instance = new static();
        }

        return static::$instance;
    }
}
