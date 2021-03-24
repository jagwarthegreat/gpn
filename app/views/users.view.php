<?php require('layouts/head.php');

use App\Core\App; ?>

<h1>Users Page</h1>

<?php foreach ($roles as $role) : ?>
    <a href="<?= App::get('base_url') ?>/user/1">
        <li><?php echo $role->role_name; ?></li>
    </a>
<?php endforeach; ?>

<form method="POST" action="<?= App::get('base_url') ?>/users">
    <input type="text" name="name">

    <button type="submit">Submit</button>

</form>

<?php require 'layouts/footer.php'; ?>