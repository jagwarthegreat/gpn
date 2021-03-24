<?php

$tasks = $app['database']->selectAll('tbl_users');


require 'views/layouts/head.php';
require 'views/index.view.php';
require 'views/layouts/footer.php';
