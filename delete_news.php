<?php
session_start();
include("../database.php");

// Check if user is logged in
if (!isset($_SESSION['id'])) {
    header("Location: ../login.php");
    exit();
}

// Check if news ID is provided
if (isset($_GET['id'])) {

    $id = intval($_GET['id']);

    $sql = "DELETE FROM news WHERE id = $id";

    if (mysqli_query($conn, $sql)) {
        echo "<script>
                alert('News deleted successfully!');
                window.location='dashboard.php';
              </script>";
    } else {
        echo "<script>
                alert('Error deleting news!');
                window.location='dashboard.php';
              </script>";
    }

} else {
    echo "<script>
            alert('Invalid request!');
            window.location='dashboard.php';
          </script>";
}
?>