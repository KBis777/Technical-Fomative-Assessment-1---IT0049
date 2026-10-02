<!DOCTYPE html>
<html>
<head>
    <title>Customer Accounts</title>
</head>
<body>

<h1>Customer Accounts</h1>

<a href="/">Home</a> |
<a href="/about">About</a> |
<a href="/customers">Customers</a> |
<a href="/users">Users</a>

<h2>Customer List</h2>

<?php foreach ($customers as $customer): ?>

    <p>
        <strong>Full Name:</strong> <?= $customer['name'] ?><br>
        <strong>Email:</strong> <?= $customer['email'] ?><br>
        <strong>Phone:</strong> <?= $customer['phone'] ?>
    </p>

    <hr>

<?php endforeach; ?>

</body>
</html>