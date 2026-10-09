<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="<?= base_url('css/style.css') ?>">
    <title>Task List</title>
</head>
<body>

<h1>Task List</h1>

<nav>
    <a href="<?= base_url('/') ?>">Welcome</a>
    <a href="<?= base_url('tasks') ?>" class="active">Task List</a>
    <a href="<?= base_url('profile') ?>">Profile</a>
    <a href="<?= base_url('about') ?>">About</a>
</nav>

<table>
    <thead>
        <tr>
            <th>Task</th>
            <th>Status</th>
            <th>Date</th>
            <th>Created At</th>
        </tr>
    </thead>
    <tbody>

    <?php foreach ($tasks as $task): ?>
        <?php $status = strtolower(trim($task['status'])); ?>
        <tr>
            <td><?= esc($task['title']) ?></td>
            <td>
                <span class="badge badge-<?= esc($status, 'attr') ?>">
                    <?= esc($task['status']) ?>
                </span>
            </td>
            <td><?= esc($task['task_date']) ?></td>
            <td><?= esc($task['created_at']) ?></td>
        </tr>
    <?php endforeach; ?>

    </tbody>
</table>

</body>
</html>