<!DOCTYPE html>
<html>
<head>
    <title>User Accounts</title>
</head>
<body>

<h1>User Accounts</h1>

<a href="/">Home</a> |
<a href="/about">About</a> |
<a href="/customers">Customers</a> |
<a href="/users">Users</a>

<h2>User List</h2>

<?php foreach ($users as $user): ?>

    <p>
        <strong>Username:</strong> <?= $user['username'] ?><br>
        <strong>Full Name:</strong> <?= $user['name'] ?><br>
        <strong>Role:</strong> <?= $user['role'] ?>
    </p>

    <hr>

<?php endforeach; ?>

</body>
</html>