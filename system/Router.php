<?php

namespace App\Core;

use Exception;

class Router
{
	public $routes = [
		'GET' => [],
		'POST' => []
	];

	public static function load($file)
	{
		$router = new static;
		require $file;

		return $router;
	}

	public function define($routes)
	{
		$this->routes = $routes;
	}

	public function get($uri, $controller)
	{
		$this->routes['GET'][$uri] = $controller;
	}

	public function post($uri, $controller)
	{
		$this->routes['POST'][$uri] = $controller;
	}

	public function direct($uri, $requestType)
	{
		if (array_key_exists($uri, $this->routes[$requestType])) {

			return $this->callAction(
				...explode('@', $this->routes[$requestType][$uri])
			);
		}

		throw new Exception('No route defined for this URI');
	}

	protected function callAction($controller, $action)
	{
		$useController = "App\\Controllers\\{$controller}";
		$controllerClass = new $useController;

		if (!method_exists($controllerClass, $action)) {

			throw new Exception(
				"{$controller} does not respond to the {$action} action."
			);
		}

		return $controllerClass->$action();
	}
}
