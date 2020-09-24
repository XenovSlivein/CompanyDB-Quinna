<?php
// include database connection file
include_once("D:\\Xampp\\htdocs\\CompanyDB-Quinna\\config.php");

if(isset($_POST['update']))
{   
    $emp_id = $_POST['emp_ID'];
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $birthday = $_POST['birthday'];
    $sex = $_POST['sex'];
    $salary = $_POST['salary'];

    $sql = "UPDATE employee SET emp_id='$emp_id', first_name='$firstname',last_name='$lastname',birth_day='$birthday', sex='$sex', salary='$salary' WHERE emp_id=$emp_id";

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
$result = mysqli_query($mysqli, "SELECT * FROM employee WHERE worker_id=$id");

while($user_data = mysqli_fetch_array($result))
{
    $emp_id = $user_data['emp_id'];
    $firstname = $user_data['first_name'];
    $lastname = $user_data['last_name'];
    $birthday = $user_data['birth_day'];
    $sex = $user_data['sex'];
    $salary = $user_data['salary'];
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
                    <td><input type="number" name="emp_ID" value=<?php echo $emp_id;?>></td>
                </tr>
                <tr> 
                    <td>First Name</td>
                    <td><input type="text" name="firstname" value=<?php echo $firstname;?>></td>
                </tr>
                <tr> 
                    <td>Last Name</td>
                    <td><input type="text" name="lastname" value=<?php echo $lastname;?>></td>
                </tr>
                <tr> 
                    <td>Birth Day</td>
                    <td><input type="date" name="birthday" value=<?php echo $birthday;?>></td>
                </tr>
                <tr> 
                    <td>Sex</td>
                    <td><input type="text" name="sex" value=<?php echo $sex;?>></td>
                </tr>
                <tr> 
                    <td>Salary</td>
                    <td><input type="text" name="salary" value=<?php echo $salary;?>></td>
                </tr>
                <tr>
                    <td><input type="hidden" name="id" value=<?php echo $_GET['id'];?>></td>
                    <td><input type="submit" name="update" value="Update"></td>
                </tr>
            </table>
        </form>
    </body>
</html>