<html>
    <head>
        <title>Add New Employee</title>
    </head>

    <body>
        <a href="index.php">Go to Home</a>
        <br/><br/>

        <form action="add.php" method="post" name="Form_Add">
            <table width="25%" border="0">
                <tr> 
                    <td>Employee Number</td>
                    <td><input type="number" name="emp_id"></td>
                </tr>
                <tr> 
                    <td>First Name</td>
                    <td><input type="text" name="first_name"></td>
                </tr>
                <tr> 
                    <td>Last Name</td>
                    <td><input type="text" name="last_name"></td>
                </tr>
                <tr> 
                    <td>Birth Day</td>
                    <td><input type="date" name="birth_day"></td>
                </tr>
                <tr> 
                    <td>Sex</td>
                    <td><input type="radio" id="male" name="sex_male" value="male">Male</td>
                    <td><input type="radio" id="female" name="sex_female" value="female">Female</td>
                </tr>
                <tr> 
                    <td>Salary</td>
                    <td><input type="text" name="salary"></td>
                </tr>
                <tr> 
                    <td></td>
                    <td><input type="submit" name="Submit" value="Add"></td>
                </tr>
            </table>
        </form>

        <?php

        // Check If form submitted, insert form data into employee table.
        if(isset($_POST['Submit'])) {
            $emp_id = $_POST['emp_id'];
            $firstname = $_POST['first_name'];
            $lastname = $_POST['last_name'];
            $birthday = $_POST['birth_day'];
            $sex = $_POST['sex'];
            $salary = $_POST['salary'];

            // include database connection file
            include_once("D:\\Xampp\\htdocs\\CompanyDB-Quinna\\config.php");

            // Insert user data into table
            $result = mysqli_query($mysqli, "INSERT INTO employee (emp_id,first_name,last_name,birth_day,sex,salary) VALUES('$$emp_id','$firstname','$lastname','$birthday','$sex','$salary')");

            // Show message when user added
            echo "User added successfully. <a href='Employee/index.php'>View Users</a>";
        }
        ?>
    </body>
</html>