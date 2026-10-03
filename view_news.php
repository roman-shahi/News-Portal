<?php
include 'database.php';

$sql = "SELECT * FROM news ORDER BY id DESC";
$result = mysqli_query($conn, $sql);
?>

<!DOCTYPE html>
<html>
<head>
    <title>View News</title>
    <style>
        body{
            font-family: Arial, sans-serif;
            margin:20px;
            background:#f5f5f5;
        }
        .news{
            background:white;
            padding:15px;
            margin-bottom:20px;
            border-radius:8px;
            box-shadow:0 0 5px rgba(0,0,0,0.2);
        }
        img{
            width:250px;
            height:auto;
            margin-top:10px;
        }
    </style>
</head>
<body>

<h2>Latest News</h2>

<?php
if(mysqli_num_rows($result) > 0){
    while($row = mysqli_fetch_assoc($result)){
?>
<div class="news">
    <h3><?php echo $row['title']; ?></h3>
    <p><strong>Category:</strong> <?php echo $row['category']; ?></p>

    <?php
    if(!empty($row['image'])){
        echo "<img src='uploads/".$row['image']."' alt='News Image'>";
    }
    ?>

    <p><?php echo $row['content']; ?></p>
    <small>Published on: <?php echo $row['created_at']; ?></small>
</div>

<?php
    }
}else{
    echo "<h3>No News Available</h3>";
}
?>

</body>
</html>