<?php 

include "connect.php"; // Database connection

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "DELETE FROM demo WHERE id = $id";
    $result = mysqli_query($conn, $sql);
    if ($result) {
        echo "Data deleted successfully";
        header("Location: view.php");
    } else {
        echo "Error deleting data: " . mysqli_error($conn);
    }
}

?>


