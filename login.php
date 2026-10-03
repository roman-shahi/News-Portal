<?php

session_start();

include("database.php");

?>

<!DOCTYPE html>

<html>

<head>

<title>Login</title>

</head>

<body>

<h2>User Login</h2>

<form method="POST">

<input type="email" name="email" placeholder="Email">

<br><br>

<input type="password" name="password" placeholder="Password">

<br><br>

<button name="login">Login</button>

</form>

</body>

</html>