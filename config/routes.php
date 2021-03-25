<?php

// auth
$router->get('login', 'LoginController@index');
$router->post('login', 'LoginController@authenticate');

$router->get('', 'WelcomeController@home');
$router->get('home', 'WelcomeController@home');

$router->get("users", 'UsersController@index');
$router->get("users/detail/{id}", 'UsersController@detail');
$router->post('users', 'UsersController@store');
