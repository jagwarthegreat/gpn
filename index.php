<?php

use App\Core\Router;
use App\Core\Request;

/**
 * Register the auto loader
 * 
 */
require __DIR__ . '/vendor/autoload.php';

/**
 * Load the DI containers and helpers
 * 
 */
require 'system/bootstrap.php';

/**
 * direct the routes
 * 
 */
Router::load('config/routes.php')
	->direct(Request::uri(), Request::method());
