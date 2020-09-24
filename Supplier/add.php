<html>
    <head>
        <title>Add New Supplier</title>
    </head>

    <body>
        <a href="index.php">Go to Home</a>
        <br/><br/>

        <form action="add.php" method="post" name="Form_Add">
            <table width="25%" border="0">
                <tr> 
                    <td>Branch ID</td>
                    <td>
                    <form method="POST">
                        <select name="branch_id" id="branch_id">
                            <option disabled selected> --- Select --- </option>
                            <?php 
                                // include database connection file
                                include_once("D:\\Xampp\\htdocs\\CompanyDB-Quinna\\config.php");

                                $sql=mysqli_query($mysqli, "SELECT * FROM branch");
                                while ($data=mysqli_fetch_array($sql)) {
                            ?>
                                <option value="<?=$data['branch_id']?>"><?=$data['branch_id'] ?></option> 
                                <!-- , ' - ' ,  $data['branch_name'] -->
                            <?php
                                }
                            ?>
                        </select>
                    </form>
                    </td>
                </tr>
                <tr> 
                    <td>Supplier Name</td>
                    <td><input type="text" name="supplier_name"></td>
                </tr>
                <tr> 
                    <td>Supply Type</td>
                    <td><input type="text" name="supply_type"></td>
                </tr>
                <tr> 
                    <td></td>
                    <td><input type="submit" name="Submit" value="Add"></td>
                </tr>
            </table>
        </form>

        <?php

        // Check If form submitted, insert form data into branch_supplier table.
        if(isset($_POST['Submit'])) {
            // include database connection file
            include_once("D:\\Xampp\\htdocs\\CompanyDB-Quinna\\config.php");

            $branch_id = $_POST['branch_id'];
            $supplier_name = $_POST['supplier_name'];
            $supply_type = $_POST['supply_type'];

            // Insert user data into table
            $result = mysqli_query($mysqli, "INSERT INTO branch_supplier (branch_id, supplier_name, supply_type) VALUES('$branch_id','$supplier_name','$supply_type')");

            // //Check Query Error
            // if ($mysqli->query($result) === TRUE) {
            //     echo "Record updated successfully";
            //   } else {
            //     echo "Error updating record: " . $mysqli->error;
            //   }

            // Show message when user added
            echo "Record added successfully <a href='index.php'>View Supplier Details</a>";
        }
        ?>
    </body>
</html>