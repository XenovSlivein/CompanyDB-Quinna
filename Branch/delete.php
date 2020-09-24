<?php
// include database connection file
include_once("D:\\Xampp\\htdocs\\CompanyDB-Quinna\\config.php");

// Get id from URL to delete that user
$id = $_GET['id'];

// Delete user row from table based on given id
$result = mysqli_query($mysqli, "DELETE FROM branch WHERE branch_id=$id");
//"UPDATE employee SET active_status=2 WHERE worker_id=$id");

// After delete redirect to Home, so that latest user list will be displayed.
header("Location:index.php");
?>