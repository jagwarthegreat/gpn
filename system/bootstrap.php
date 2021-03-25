<?php

use App\Core\App;

require 'helpers.php';

App::bind('config', require 'config/config.php');

App::bind(
    'base_url',
    "/" . App::get('config')['app']['base_url']
);

App::bind('database', new QueryBuilder(
    Connection::make(App::get('config')['database'])
));
