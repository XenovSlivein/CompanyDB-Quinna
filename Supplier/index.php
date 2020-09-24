<!DOCTYPE html>
<html lang="en">
    <head> 
        <meta charset="utf-8">
        <title>Company</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!-- Links -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
        <link rel="stylesheet" href="style.css">
        
        <!-- Scripts -->
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
        <?php
            // Create database connection using config file
            include_once("D:\\Xampp\\htdocs\\CompanyDB-Quinna\\config.php");

            // Fetch all users data from database
            $result = mysqli_query($mysqli, "SELECT * FROM branch_supplier ORDER BY branch_id ASC"); 
            //WHERE active_status=1
        ?>

        <div class="container">
	    	<!-- <nav>
	    		<ul>
	    			<li><a class="homepagelink" href="/CompanyDB-Quinna/Homepage.php">Quinna</a></li>
	    			<li><a class="activelink" href="Branch/index.php">Branch</a></li>
	    			<li><a class="activelink" href="Supplier/index.php">Supplier</a></li>
	    			<li><a class="activelink" href="Employee/index.php">Employee</a></li>
	    		</ul>
	    	</nav> -->
            
            <div class="page-header clearfix">
                <h2 class="pull-left">Supplier Details</h2>
                <a href="/CompanyDB-Quinna/Homepage.php" class="btn btn-success pull-right">Back to Home</a>
	            <a href="add.php" class="btn btn-success pull-right">Add New Supplier</a>
            </div>
            
            <table class='table table-bordered table-striped' width='80%' border=1>
                <tr>
                    <th>Branch ID</th>
                    <th>Supplier Name</th> 
                    <th>Supply Type</th>
                    <th>Update</th>
                </tr>
                <?php  
                    while($row = mysqli_fetch_array($result)) {         
                        echo "<tr>";
                            echo "<td>".$row['branch_id']."</td>";
                            echo "<td>".$row['supplier_name']."</td>";
                            echo "<td>".$row['supply_type']."</td>";  
                            echo "<td>";
	                        echo "<a href='edit.php?id=". $row['branch_id'] ."' title='Update Record' data-toggle='tooltip'><span class='glyphicon glyphicon-pencil'></span></a>";
	                        echo "<a href='delete.php?id=". $row['branch_id'] ."&supplier_name=". $row['supplier_name'] ."' title='Delete Record' data-toggle='tooltip'><span class='glyphicon glyphicon-trash'></span></a>";
	                        echo "</td>";       
                        echo "<tr>";
                    }
                ?>
            </table>
	    </div>
    </body>
</html>