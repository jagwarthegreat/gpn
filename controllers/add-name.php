<?php

$data = [
	'role_name' => $_POST['name']
];

$app['database']->insert('tbl_role', $data);
header('Location: /' . $route . '/');
