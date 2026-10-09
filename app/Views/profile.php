<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="public/css/style.css">
    <title>Profile</title>
</head>
<body>

<h1>Profile</h1>

<nav>
    <a href="<?= base_url('/') ?>">Welcome</a> |
    <a href="<?= base_url('tasks') ?>">Task List</a> |
    <a href="<?= base_url('profile') ?>" class="active">Profile</a> |
    <a href="<?= base_url('about') ?>">About</a>
</nav>

<hr>

<div class="about-hero">
    <div class="avatar avatar-initials">
        <?= esc(strtoupper(substr($user['full_name'], 0, 1))) ?>
    </div>
    <div>
        <h2><?= esc($user['full_name']) ?></h2>
        <p class="role">@<?= esc($user['username']) ?></p>
    </div>
</div>

<p><strong>Username:</strong> <?= esc($user['username']) ?></p>

<p><strong>Email:</strong> <?= esc($user['email']) ?></p>

<p><strong>Account Created:</strong> <?= date('M j, Y', strtotime($user['created_at'])) ?></p>

</body>
</html>