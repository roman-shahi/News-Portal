<?php
session_start();
include("../database.php");

// Check if user is logged in
if (!isset($_SESSION['id'])) {
    header("Location: ../login.php");
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Admin Dashboard</title>

    <link rel="stylesheet" href="../css/style.css">

    <style>
        body{
            background:#f4f4f4;
            font-family:Arial, sans-serif;
        }

        .container{
            width:90%;
            margin:auto;
        }

        .header{
            background:#0d6efd;
            color:white;
            padding:20px;
            text-align:center;
        }

        .menu{
            background:#ffffff;
            padding:20px;
            margin-top:20px;
            border-radius:8px;
            box-shadow:0 0 10px rgba(0,0,0,.2);
        }

        .menu a{
            display:block;
            text-decoration:none;
            background:#0d6efd;
            color:white;
            padding:12px;
            margin:10px 0;
            border-radius:5px;
            text-align:center;
        }

        .menu a:hover{
            background:#084298;
        }

        .cards{
            display:flex;
            gap:20px;
            margin-top:25px;
            flex-wrap:wrap;
        }

        .card{
            flex:1;
            min-width:200px;
            background:white;
            padding:20px;
            border-radius:10px;
            text-align:center;
            box-shadow:0 0 10px rgba(0,0,0,.2);
        }

        .card h2{
            color:#0d6efd;
        }
    </style>

</head>

<body>

<div class="header">
    <h1>📰 News Portal Admin Dashboard</h1>
</div>

<div class="container">

<div class="menu">

<a href="dashboard.php">Dashboard</a>

<a href="add_news.php">Add News</a>

<a href="edit_news.php">Edit News</a>

<a href="delete_news.php">Delete News</a>

<a href="manage_category.php">Manage Categories</a>

<a href="../logout.php">Logout</a>

</div>

<div class="cards">

<div class="card">
<h2>News</h2>
<p>Manage all news articles.</p>
</div>

<div class="card">
<h2>Categories</h2>
<p>Add or edit categories.</p>
</div>

<div class="card">
<h2>Users</h2>
<p>Manage registered users.</p>
</div>

</div>

</div>

</body>
</html>