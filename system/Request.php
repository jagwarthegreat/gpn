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

	/**
	 * Validates the POST method inputs
	 * 
	 */
	public static function validate($datas = [])
	{
		$errorList = "";
		foreach ($_POST as $inputName => $inputValue) {
			if (empty($inputValue)) {
				$errorList .= "&bull; {$inputName} is required but has no value.<br>";
			}
		}

		if (!empty($errorList)) {
			$_SESSION["VALIDATION_ERROR"] = $errorList;
			redirect('login');
			exit();
		}
	}
}
