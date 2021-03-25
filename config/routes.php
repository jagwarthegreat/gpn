<?php

$router->get('', 'PagesController@home');
$router->get('home', 'PagesController@home');
$router->get('about', 'PagesController@about');
$router->get('contact', 'PagesController@contact');

$router->get("users", 'UsersController@index');
$router->get("users/detail/{id}", 'UsersController@detail');
$router->post('users', 'UsersController@store');

$router->get("settings", 'SettingsController@index');
