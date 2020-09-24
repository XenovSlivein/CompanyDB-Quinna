<html>
    <head>
        <title>Add New Branch</title>
    </head>

    <body>
        <a href="index.php">Go to Home</a>
        <br/><br/>

        <form action="add.php" method="post" name="Form_Add">
            <table width="25%" border="0">
                <tr> 
                    <td>Branch ID</td>
                    <?php
                        // include database connection file
                        include_once("D:\\Xampp\\htdocs\\CompanyDB-Quinna\\config.php");

                        $rownumber = mysqli_query($mysqli, "SELECT * FROM branch");
                        $num_rows = mysqli_num_rows($rownumber);
                    ?>
                    <td><input type="text" name="branch_id" value="<?php echo $num_rows + 1 ?>" readonly></td>
                </tr>
                <tr> 
                    <td>Branch Name</td>
                    <td><input type="text" name="branch_name"></td>
                </tr>
                <tr> 
                <!-- ManagerID only can be selected when AddNewBranch and can't be changed once selected. -->
                    <td>Manager ID</td>
                    <td>
                    <form method="POST">
                        <select name="mgr_id" id="mgr_id">
                            <option disabled selected> --- Select --- </option>
                            <?php 
                                $sql=mysqli_query($mysqli, "SELECT * FROM employee");
                                while ($data=mysqli_fetch_array($sql)) {
                            ?>
                                <option value="<?=$data['emp_id']?>"><?=$data['emp_id']?></option> 
                            <?php
                                }
                            ?>
                        </select>
                    </form>
                </tr>
                <tr> 
                    <td>Manager Start Date</td>
                    <td><input type="date" name="mgr_start_date"></td>
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
            // include database connection file
            include_once("D:\\Xampp\\htdocs\\CompanyDB-Quinna\\config.php");

            $rownumber = mysqli_query($mysqli, "SELECT * FROM branch");
            $num_rows = mysqli_num_rows($rownumber);

            $branch_id = $num_rows + 1;
            $branch_name = $_POST['branch_name'];
            $mgr_id = $_POST['mgr_id'];
            $mgr_start_date = $_POST['mgr_start_date'];

            // Insert user data into table
            $result = mysqli_query($mysqli, "INSERT INTO branch (branch_id, branch_name, mgr_id, mgr_start_date) VALUES('$branch_id','$branch_name','$mgr_id','$mgr_start_date')");

            //Check Query Error
            // if ($mysqli->query($result) === TRUE) {
            //     // Show message when user added
            //     echo "Record updated successfully <a href='index.php'>View Users</a>";
            //   } else {
            //     echo "Error updating record: " . $mysqli->error;
            //   }

            // Show message when user added
            echo "Record updated successfully <a href='index.php'>View Branch Details</a>";
        }
        ?>
    </body>
</html>