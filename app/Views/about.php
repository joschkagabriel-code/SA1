<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="<?= base_url('css/style.css') ?>">
    <title>About</title>
</head>
<body>

<h1>About</h1>

<nav>
    <a href="<?= base_url('/') ?>">Welcome</a>
    <a href="<?= base_url('tasks') ?>">Task List</a>
    <a href="<?= base_url('profile') ?>">Profile</a>
    <a href="<?= base_url('about') ?>" class="active">About</a>
</nav>

<div class="about-hero">
    <img src="<?= base_url('image/profile.jpg') ?>" alt="Profile" class="avatar">
    <div>
        <h2>Joschka Gabriel T. Atabelo</h2>
    </div>
</div>

<div>
    <h3>About Me</h3>
    <p>
        I am a 3rd-year BSITCST student studying at FEU Institute of Technology
    </p>
</div>

<div>
    <h3>About This Project</h3>
    <p>
        This Task Management System is a simple web application designed to help users
        organize and keep track of their daily tasks. It allows users to view tasks
        scheduled for today, check the complete task list, and monitor task statuses.
    </p>
</div>

<div>
    <h3>Contact</h3>
    <p>
        Email: jtatabelo@fit.edu.ph
    <br>Contact No.: 0123456789</br>
    </p>
    </div>
</div>

</body>
</html>