<?php
// include database connection file
include_once("D:\\Xampp\\htdocs\\CompanyDB-Quinna\\config.php");

// Check if form is submitted for user update, then redirect to homepage after update
if(isset($_POST['update']))
{   
    $id = $_POST['branch_id'];

    $supplier_name = $_POST['supplier_name'];
    $supply_type = $_POST['supply_type'];

    // update user data
    $result = mysqli_query($mysqli, "UPDATE branch_supplier SET supplier_name='$supplier_name', supply_type='$supply_type' WHERE branch_id=$id");

    // Redirect to homepage to display updated user in list
    header("Location: index.php");

    if ($mysqli->query($result) === TRUE) {
        echo "Record updated successfully";
      } else {
        echo "Error updating record: " . $mysqli->error;
      }
}
?>

<?php
// Display selected user data based on id
// Getting id from url
$id = $_GET['id'];

// Fetech user data based on id
$result = mysqli_query($mysqli, "SELECT * FROM branch_supplier WHERE branch_id=$id");

while($user_data = mysqli_fetch_array($result))
{
    $branch_id = $user_data['branch_id'];
    $supplier_name = $user_data['supplier_name'];
    $supply_type = $user_data['supply_type'];
}
?>

<html>
    <head>  
        <title>Edit Supplier Details</title>
    </head>

    <body>
        <a href="index.php">Home</a>
        <br/><br/>

        <form name="update_user" method="post" action="edit.php">
            <table border="0">
                <tr> 
                    <td>Branch ID</td>
                    <td><input type="text" name="branch_id" value="<?php echo $branch_id;?>" disabled="disabled"</td>
                </tr>
                <tr> 
                    <td>Supplier Name</td>
                    <td><input type="text" name="supplier_name" value=<?php echo $supplier_name;?>></td>
                </tr>
                <tr> 
                    <td>Supply Type</td>
                    <td><input type="text" name="supply_type" value=<?php echo $supply_type;?>></td>
                </tr>
                <tr>
                    <td><input type="hidden" name="id" value=<?php echo $_GET['id'];?>></td>
                    <td><input type="submit" name="update" value="Update"></td>
                </tr>
            </table>
        </form>
    </body>
</html>