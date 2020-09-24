<?php
// include database connection file
include_once("D:\\Xampp\\htdocs\\CompanyDB-Quinna\\config.php");

// Get id from URL to delete that user
$id = $_GET['id'];
$supplier_name = $_GET['supplier_name'];

// Delete user row from table based on given id
$result = mysqli_query($mysqli, "DELETE FROM branch_supplier WHERE branch_id=$id AND supplier_name='$supplier_name'");
//"UPDATE employee SET active_status=2 WHERE worker_id=$id");

//Check Query Error
if ($mysqli->query($result) === TRUE) {
    echo "Record updated successfully";
  } else {
    echo "Error updating record: " . $mysqli->error;
  }

// After delete redirect to Home, so that latest user list will be displayed.
header("Location:index.php");
?>