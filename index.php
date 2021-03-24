<?php

require 'core/bootstrap.php';

$route = $app['config']['app']['name'];

require Router::load('config/routes.php')
	->direct(Request::uri(), Request::method());
