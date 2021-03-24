<?php

use App\Core\Router;
use App\Core\Request;

/**
 * Register the auto loader
 * 
 */
require __DIR__ . '/vendor/autoload.php';

require 'system/bootstrap.php';

Router::load('config/routes.php')
	->direct(Request::uri(), Request::method());
