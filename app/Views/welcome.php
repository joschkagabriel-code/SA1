<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="<?= base_url('css/style.css') ?>">
    <title>Tasks for Today</title>
</head>
<body>

<h1>Tasks for Today</h1>

<p>Today's Date: <?= date('l, F j, Y') ?></p>

<nav>
    <a href="<?= base_url('/') ?>" class="active">Welcome</a>
    <a href="<?= base_url('tasks') ?>">Task List</a>
    <a href="<?= base_url('profile') ?>">Profile</a>
    <a href="<?= base_url('about') ?>">About</a>
</nav>

<?php if (empty($tasks)): ?>

    <p>No tasks for today 🎉</p>

<?php else: ?>

    <?php foreach ($tasks as $task): ?>

        <?php $status = strtolower(trim($task['status'])); ?>

        <div class="task-<?= esc($status, 'attr') ?>">
            <h3><?= esc($task['title']) ?></h3>
            <p>
                Status:
                <span class="badge badge-<?= esc($status, 'attr') ?>">
                    <?= esc($task['status']) ?>
                </span>
            </p>
            <p>Date: <?= date('M j, Y', strtotime($task['task_date'])) ?></p>
        </div>

    <?php endforeach; ?>

<?php endif; ?>

</body>
</html>