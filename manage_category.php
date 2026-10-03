<?php
session_start();
include("../database.php");

// Check if admin is logged in
if (!isset($_SESSION['id'])) {
    header("Location: ../login.php");
    exit();
}

// Get news ID
if (!isset($_GET['id'])) {
    die("News ID not found.");
}

$id = intval($_GET['id']);

// Fetch existing news
$result = mysqli_query($conn, "SELECT * FROM news WHERE id=$id");
$news = mysqli_fetch_assoc($result);

// Update news
if (isset($_POST['update'])) {

    $title = $_POST['title'];
    $description = $_POST['description'];

    $sql = "UPDATE news SET
            title='$title',
            description='$description'
            WHERE id=$id";

    if (mysqli_query($conn, $sql)) {
        echo "<script>
                alert('News updated successfully!');
                window.location='dashboard.php';
              </script>";
    } else {
        echo "Error updating news.";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit News</title>
</head>
<body>

<h2>Edit News</h2>

<form method="POST">

<label>Title</label><br>
<input type="text" name="title"
value="<?php echo $news['title']; ?>" required>

<br><br>

<label>Description</label><br>
<textarea name="description"
rows="8"
cols="50"
required><?php echo $news['description']; ?></textarea>

<br><br>

<button type="submit" name="update">
Update News
</button>

</form>

</body>
</html>