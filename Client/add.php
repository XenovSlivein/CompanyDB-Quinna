<html>
    <head>
        <title>Add New Client</title>
    </head>

    <body>
        <a href="index.php">Go to Home</a>
        <br/><br/>

        <form action="add.php" method="post" name="Form_Add">
            <table width="25%" border="0">
                <tr> 
                    <td>Client Number</td>
                    <td><input type="number" name="client_id"></td>
                </tr>
                <tr> 
                    <td>First Name</td>
                    <td><input type="text" name="client_name"></td>
                </tr>
                <tr> 
                    <td>Branch ID</td>
                    <td><input type="number" name="branch_id"></td>
                </tr>
                <tr> 
                    <td></td>
                    <td><input type="submit" name="Submit" value="Add"></td>
                </tr>
            </table>
        </form>

        <?php

        // Check If form submitted, insert form data into client table.
        if(isset($_POST['Submit'])) {
            $client_id = $_POST['client_id'];
            $clientname = $_POST['client_name'];
            $branch_id = $_POST['branch_id'];

            // include database connection file
            include_once("D:\\Xampp\\htdocs\\CompanyDB-Quinna\\config.php");

            // Insert user data into table
            $result = mysqli_query($mysqli, "INSERT INTO client (client_id,client_name,branch_id) VALUES('$$client_id','$clientname','$branch_id','$birthday','$sex','$salary')");

            // Show message when user added
            echo "Record added successfully <a href='Client/index.php'>View Clients</a>";
        }
        ?>
    </body>
</html>