<?php
// Create database connection using config file
include_once("D:\\Xampp\\htdocs\\CompanyDB-Quinna\\config.php");

// Fetch all users data from database
$result = mysqli_query($mysqli, "SELECT * FROM branch_supplier ORDER BY branch_id ASC"); 
//WHERE active_status=1

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
        <nav>
		    <a class="homepagelink" href="Homepage.php">Company</a>
			<ul>
				<li><a class="activelink" href="Employee/Employee_Details.php">Employee Details</a></li>
				<li><a class="activelink" href="Branch_Details.php">Branch</a></li>
				<li><a class="activelink" href="Supplier/index.php">Supplier</a></li>
			</ul>
        </nav>
                
        <div class="page-header clearfix">
	        <h2 class="pull-left">Supplier Details</h2>
	        <a href="add.php" class="btn btn-success pull-right">Add New Supplier</a>
        </div>
        
        <!-- <a href="add.php">Add New Employee</a><br/><br/> -->

        <table class='table table-bordered table-striped' width='80%' border=1>
            <tr>
                <th>Supplier Name</th> 
                <th>Supply Type</th>
            </tr>
            <?php  
            while($row = mysqli_fetch_array($result)) {         
                echo "<tr>";
                    echo "<td>".$row['supplier_name']."</td>";
                    echo "<td>".$row['supply_type']."</td>";  
                    echo "<td>";
	                echo "<a href='edit.php?id=". $row['branch_id'] ."' title='Update Record' data-toggle='tooltip'><span class='glyphicon glyphicon-pencil'></span></a>";
	                echo "<a href='delete.php?id=". $row['branch_id'] ."' title='Delete Record' data-toggle='tooltip'><span class='glyphicon glyphicon-trash'></span></a>";
	                echo "</td>";
                    // echo "<td><a href='edit.php?id=$row[worker_id]'>Edit</a>";
                    // echo "<td><a href='delete.php?id=$row[worker_id]'>Delete</a>";        
                echo "<tr>";
            }
            ?>
        </table>
    </body>
</html>