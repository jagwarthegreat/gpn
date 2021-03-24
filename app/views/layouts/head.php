<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>

<body>
	<?php

	use App\Core\App; ?>

	<nav>
		<ul>
			<li><a href="<?= App::get('base_url') ?>/home">Home</a></li>

			<li><a href="<?= App::get('base_url') ?>/contact">Contact Page</a></li>

			<li><a href="<?= App::get('base_url') ?>/about">About Page</a></li>

			<li><a href="<?= App::get('base_url') ?>/users">Users Page</a></li>
		</ul>
	</nav>