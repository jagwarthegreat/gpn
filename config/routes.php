<?php

// auth
$router->get('login', 'AuthController@index');
$router->post('login', 'AuthController@authenticate');
$router->get('logout', 'AuthController@logout');

$router->get('', 'WelcomeController@home');
$router->get('home', 'WelcomeController@home');

$router->get("users", 'UsersController@index');
$router->get("users/detail/{id}", 'UsersController@detail');
$router->post('users', 'UsersController@store');
