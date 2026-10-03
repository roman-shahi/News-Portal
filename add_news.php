<?php
include 'database.php';

if(isset($_POST['upload'])){

    $title = $_POST['title'];
    $content = $_POST['content'];

    $image = $_FILES['image']['name'];
    $temp = $_FILES['image']['tmp_name'];

    move_uploaded_file($temp, "uploads/" . $image);

    $sql = "INSERT INTO news (title, content, image)
            VALUES ('$title', '$content', '$image')";

    if(mysqli_query($conn, $sql)){
        echo "<script>alert('News uploaded successfully!');</script>";
    } else {
        echo "<script>alert('Error uploading news!');</script>";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Add News</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<h2>Add News</h2>

<form method="POST" enctype="multipart/form-data">
    <input type="text" name="title" placeholder="News Title" required><br><br>

    <textarea name="content" placeholder="News Content" rows="5" cols="40" required></textarea><br><br>

    <input type="file" name="image" accept="image/*" required><br><br>

    <button type="submit" name="upload">Upload News</button>
</form>

</body>
</html>