<?php
// Create database connection using config file
include_once("D:\\Xampp\\htdocs\\CompanyDB-Quinna\\config.php");

// Fetch all users data from database
$result = mysqli_query($mysqli, "SELECT * FROM employee WHERE active_status=1 ORDER BY worker_id ASC");
?>

<!DOCTYPE html>
<html lang="en">
    <head>    
        <title>Company</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
	    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.js"></script>
        <style type="text/css">
            .wrapper{
	            width: 650px;
	            margin: 0 auto;
	        }
	        .page-header h2{
	            margin-top: 0;
	        }
	        table tr td:last-child a{
	            margin-right: 15px;
	        }
	    </style>
	    <script type="text/javascript">
	        $(document).ready(function(){
	            $('[data-toggle="tooltip"]').tooltip();   
	        });
	    </script>
    </head>
    <body>
        <div class="page-header clearfix">
            <h2 class="pull-left">Employees Details</h2>
            <a href="/CompanyDB-Quinna/Homepage.php" class="btn btn-success pull-right">Back to Home</a>
	        <a href="add.php" class="btn btn-success pull-right">Add New Employee</a>
        </div>
        
        <!-- <a href="add.php">Add New Employee</a><br/><br/> -->

        <table class='table table-bordered table-striped' width='80%' border=1>
            <tr>
                <th>Client ID</th> 
                <th>Client Name</th> 
                <th>Branch ID</th>
            </tr>
            <?php  
            while($row = mysqli_fetch_array($result)) {         
                echo "<tr>";
                    echo "<td>".$row['client_id']."</td>";
                    echo "<td>".$row['client_name']."</td>";
                    echo "<td>".$row['branch_id']."</td>"; 
                    echo "<td>";
	                echo "<a href='edit.php?id=". $row['client_id'] ."' title='Update Record' data-toggle='tooltip'><span class='glyphicon glyphicon-pencil'></span></a>";
	                echo "<a href='delete.php?id=". $row['client_id'] ."' title='Delete Record' data-toggle='tooltip'><span class='glyphicon glyphicon-trash'></span></a>";
	                echo "</td>";      
                echo "<tr>";
            }
            ?>
        </table>
    </body>
</html>