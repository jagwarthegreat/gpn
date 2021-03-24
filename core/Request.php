<?php

class Request
{
	public static function uri()
	{
		return trim(parse_url(str_replace('/test_pdo/', "", $_SERVER['REQUEST_URI']), PHP_URL_PATH),  '/');
	}

	public static function method()
	{
		return $_SERVER['REQUEST_METHOD'];
	}
}
