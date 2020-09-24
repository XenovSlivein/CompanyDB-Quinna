<?php
// include database connection file
include_once("D:\\Xampp\\htdocs\\CompanyDB-Quinna\\config.php");

if(isset($_POST['update']))
{   
    $branch_id = $_POST['branch_id'];
    $branch_name = $_POST['branch_name'];
    $mgr_id = $_POST['mgr_id'];
    $mgr_start_date = $_POST['mgr_start_date'];

    $sql = "UPDATE branch SET branch_id='$branch_id', branch_name='$branch_name',mgr_id='$mgr_id',mgr_start_date='$mgr_start_date' WHERE branch_id=$branch_id";

    if ($mysqli->query($sql) === TRUE) {
      echo "Record updated successfully";
    } else {
      echo "Error updating record: " . $mysqli->error;
    }

    // Redirect to homepage to display updated user in list
    header("Location: index.php");
}
?>

<?php
// Display selected user data based on id
// Getting id from url
$id = $_GET['id'];

// Fetech user data based on id
$result = mysqli_query($mysqli, "SELECT * FROM branch WHERE branch_id=$id");

while($user_data = mysqli_fetch_array($result))
{
    $branch_id = $user_data['branch_id'];
    $branch_name = $user_data['branch_name'];
    $mgr_id = $user_data['mgr_id'];
    $mgr_start_date = $user_data['mgr_start_date'];
}
?>

<html>
    <head>  
        <title>Edit Branch Details</title>
    </head>

    <body>
        <a href="index.php">Home</a>
        <br/><br/>

        <form name="update_user" method="post" action="edit.php">
            <table border="0">
                <tr> 
                    <td>Branch ID</td>
                    <td><input type="text" name="branch_id" value=<?php echo $branch_id;?> readonly></td>
                </tr>
                <tr> 
                    <td>Branch Name</td>
                    <td><input type="text" name="branch_name" value=<?php echo $branch_name;?>></td>
                </tr>
                <tr> 
                    <td>Manager ID</td>
                    <td><input type="text" name="mgr_id" value=<?php echo $mgr_id;?> readonly></td>
                </tr>
                <tr> 
                    <td>Manager Start Date</td>
                    <td><input type="date" name="mgr_start_date" value=<?php echo $mgr_start_date;?>></td>
                </tr>
                <tr>
                    <td><input type="hidden" name="id" value=<?php echo $_GET['id'];?>></td>
                    <td><input type="submit" name="update" value="Update"></td>
                </tr>
            </table>
        </form>
    </body>
</html>