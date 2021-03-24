<?php

use App\Core\App;


App::bind('config', require 'config/config.php');

App::bind(
    'base_url',
    "/" . App::get('config')['app']['base_url']
);

App::bind('database', new QueryBuilder(
    Connection::make(App::get('config')['database'])
));



/**
 * Global functions
 * 
 */
function view($name, $data = [])
{
    extract($data);

    return require "app/views/{$name}.view.php";
}

function redirect($path)
{
    $path = App::get('base_url') . "/" . $path;
    header("Location: {$path}");
}
