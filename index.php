<?php
include("database.php");
?>

<!DOCTYPE html>
<html>
<head>
    <title>News Portal</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

<h1>News Portal</h1>

<a href="login.php">Login</a>
<a href="register.php">Register</a>

<h2>Latest News</h2>

<?php
$result = mysqli_query($conn, "SELECT * FROM news ORDER BY created_at DESC");

while($row = mysqli_fetch_assoc($result)){
?>
<div class="news-card">
    <img src="uploads/news/<?php echo $row['image']; ?>" width="300">
    <h3><?php echo $row['title']; ?></h3>
    <p><?php echo substr($row['description'],0,150); ?>...</p>
    <a href="article.php?id=<?php echo $row['id']; ?>">Read More</a>
</div>
<?php } ?>

</body>
</html>