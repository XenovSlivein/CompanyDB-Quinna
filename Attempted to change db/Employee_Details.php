<!DOCTYPE html>
<html lang="en">
	<head>
	    <meta charset="UTF-8">
	    <title>Dashboard</title>
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
	    <div class="wrapper">
	        <div class="container-fluid">
	            <div class="row">
				<nav>
					<a class="homepagelink" href="Homepage.php">Company</a>
					<ul>
						<li><a class="activelink" href="Employee/Employee_Details.php">Employee Details</a></li>
						<li><a class="activelink" href="Branch_Details.php">Branch</a></li>
						<li><a class="activelink" href="Supplier_Details.php">Supplier</a></li>
					</ul>
				</nav>
	            <div class="col-md-12">
	                <div class="page-header clearfix">
	                    <h2 class="pull-left">Employees Details</h2>
	                    <a href="add.php" class="btn btn-success pull-right">Add New Employee</a>
	                </div>
	                <?php
	                // Include config file
	                require_once "D:\\Xampp\\htdocs\\CompanyDB-Quinna\\config.php";
	
	                // Attempt select query execution
	                $sql = "SELECT * FROM employee";
	                if($result = mysqli_query($mysqli, $sql)){
	                    if(mysqli_num_rows($result) > 0){
	                        echo "<table class='table table-bordered table-striped'>";
	                            echo "<thead>";
	                                echo "<tr>";
									echo "<th>#</th>";
	                                echo "<th>First Name</th>";
									echo "<th>Last Name</th>";
									echo "<th>Birthday</th>";
	                                echo "<th>Sex</th>";
	                                echo "<th>Salary</th>";
	                                echo "</tr>";
	                            echo "</thead>";
	                            echo "<tbody>";
	                            while($row = mysqli_fetch_array($result)){
	                                echo "<tr>";
	                                    echo "<td>" . $row['worker_id'] . "</td>";
										echo "<td>" . $row['first_name'] . "</td>";
										echo "<td>" . $row['last_name'] . "</td>";
										echo "<td>"	. $row['birth_day']."</td>";
	                                    echo "<td>" . $row['sex'] . "</td>";
	                                    echo "<td>" . $row['salary'] . "</td>";
	                                    echo "<td>";
	                                    echo "<a href='view.php?id=". $row['worker_id'] ."' title='View Record' data-toggle='tooltip'><span class='glyphicon glyphicon-eye-open'></span></a>";
	                                    echo "<a href='edit.php?id=". $row['worker_id'] ."' title='Update Record' data-toggle='tooltip'><span class='glyphicon glyphicon-pencil'></span></a>";
	                                    echo "<a href='delete.php?id=". $row['worker_id'] ."' title='Delete Record' data-toggle='tooltip'><span class='glyphicon glyphicon-trash'></span></a>";
	                                    echo "</td>";
	                                echo "</tr>";
	                            }
	                            echo "</tbody>";                            
	                        echo "</table>";
	                        // Free result set
	                        mysqli_free_result($result);
	                    } else{
	                        echo "<p class='lead'><em>No records were found.</em></p>";
	                    }
	                } else{
	                    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
	                }
				
	                // Close connection
	                mysqli_close($mysqli);
	                ?>
	            </div>
	            </div>        
	        </div>
	    </div>
	</body>
</html>

<!-- <html>
	<head>
		<meta charset="utf-8">
		<title>Quinna Company</title>
		<link rel="stylesheet" type="text/css" href="style.css">
	</head>
	<body>
		<nav>
			<a class="homepagelink" href="Homepage.php">Company</a>
			<ul>
				<li><a class="activelink" href="Employee/Employee_Details.php">Employee Details</a></li>
				<li><a class="activelink" href="Branch_Details.php">Branch</a></li>
				<li><a class="activelink" href="Supplier_Details.php">Supplier</a></li>
			</ul>
		</nav>
		<div class="contact-title">
			<h1>EMPLOYEE DETAILS</h1>
			<br>
		</div>
		<div>
			<table class="table" height="30%">
	 			<tr>
					<th>First Name</th>
					<th>Last Name</th>
					<th>Birth Day</th>
					<th>Sex</th>
					<th>Salary</th>
				</tr>
		</div>
	</body>
</html> 

<?php
			$con=mysqli_connect("localhost","root", "","companydb");
			$mysql_run=mysqli_query($con, "SELECT * FROM employee ORDER BY first_name ASC");
		
			while ($row=mysqli_fetch_assoc($mysql_run)) {
					
			echo '<tr><td>'.$row['first_name'].'</td>';
			echo '<td>'.$row['last_name'].'</td>';
			echo '<td>'.$row['birth_day'].'</td>';
			echo '<td>'.$row['sex'].'</td>';
			echo '<td>'.$row['salary'].'</td>';
		}
			echo '</table> </center>';
?> -->

