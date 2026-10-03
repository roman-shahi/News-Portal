<?php
include("database.php");

if(isset($_POST['register'])){

$fullname = $_POST['fullname'];
$email = $_POST['email'];
$password = password_hash($_POST['password'], PASSWORD_DEFAULT);

$sql = "INSERT INTO users(fullname,email,password)
VALUES('$fullname','$email','$password')";

if(mysqli_query($conn,$sql)){
    echo "Registration Successful!";
}else{
    echo "Error!";
}

}
?>

<!DOCTYPE html>
<html>
<head>
    <title>User Registration</title>
</head>

<body>

<h2>Create Account</h2>

<form method="POST">

<label>Full Name</label><br>
<input type="text" name="fullname" required>

<br><br>

<label>Email</label><br>
<input type="email" name="email" required>

<br><br>

<label>Password</label><br>
<input type="password" name="password" required>

<br><br>

<button type="submit" name="register">
Register
</button>

</form>

<br>

<a href="login.php">Already have an account? Login</a>

</body>
</html>