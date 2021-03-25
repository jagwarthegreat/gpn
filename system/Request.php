<?php

namespace App\Core;

use App\Core\App;

class Request
{
	/**
	 * Fetch the request URI.
	 *
	 * @return string
	 */
	public static function uri()
	{
		return trim(parse_url(str_replace(App::get('base_url') . '/', "", $_SERVER['REQUEST_URI']), PHP_URL_PATH),  '/');
	}

	/**
	 * Fetch the request method.
	 *
	 * @return string
	 */
	public static function method()
	{
		return $_SERVER['REQUEST_METHOD'];
	}
}
