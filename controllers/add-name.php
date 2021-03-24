<?php

$data = [
	'role_name' => $_POST['name']
];

$test = $app['database']->insert('tbl_role', $data, 'Y');
require 'views/layouts/head.php';
require 'views/name.view.php';
require 'views/layouts/footer.php';
