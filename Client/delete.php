<?php
// include database connection file
include_once("D:\\Xampp\\htdocs\\CompanyDB-Quinna\\config.php");

// Get id from URL to delete that user
$id = $_GET['id'];

// Delete user row from table based on given id
$result = mysqli_query($mysqli, "DELETE FROM client WHERE client_id=$id");
//"UPDATE client SET active_status=2 WHERE client_id=$id");

// After delete redirect to Home, so that latest user list will be displayed.
header("Location:index.php");
?>