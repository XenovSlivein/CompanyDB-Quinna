<?php
// include database connection file
include_once("D:\\Xampp\\htdocs\\CompanyDB-Quinna\\config.php");

if(isset($_POST['update']))
{   
    $client_id = $_POST['client_id'];
    $clientname = $_POST['clientname'];
    $branch_id = $_POST['branch_id'];

    $sql = "UPDATE client SET client_id='$client_id', client_name='$clientname',branch_id='$branch_id',birth_day='$birthday', sex='$sex', salary='$salary' WHERE client_id=$client_id";

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
$result = mysqli_query($mysqli, "SELECT * FROM client WHERE worker_id=$id");

while($user_data = mysqli_fetch_array($result))
{
    $client_id = $user_data['client_id'];
    $clientname = $user_data['client_name'];
    $branch_id = $user_data['branch_id'];
}
?>

<html>
    <head>  
        <title>Edit Employee Details</title>
    </head>

    <body>
        <a href="index.php">Home</a>
        <br/><br/>

        <form name="update_user" method="post" action="edit.php">
            <table border="0">
                <tr> 
                    <td>Employee Number</td>
                    <td><input type="number" name="client_id" value=<?php echo $client_id;?>></td>
                </tr>
                <tr> 
                    <td>First Name</td>
                    <td><input type="text" name="clientname" value=<?php echo $clientname;?>></td>
                </tr>
                <tr> 
                    <td>Last Name</td>
                    <td><input type="number" name="branch_id" value=<?php echo $branch_id;?>></td>
                </tr>
                <tr>
                    <td><input type="hidden" name="id" value=<?php echo $_GET['id'];?>></td>
                    <td><input type="submit" name="update" value="Update"></td>
                </tr>
            </table>
        </form>
    </body>
</html>