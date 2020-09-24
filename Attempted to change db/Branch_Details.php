<html>
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
					<th>Branch Name</th>
					<th>Start Date</th>
				</tr>
		</div>
	</body>
</html>

<?php
			$con=mysqli_connect("localhost","root", "","companydb");
			$mysql_run=mysqli_query($con, "SELECT * FROM branch ORDER BY branch_name ASC");
		
			while ($row=mysqli_fetch_assoc($mysql_run)) {
					
			echo '<tr><td>'.$row['branch_name'].'</td>';
			echo '<td>'.$row['mgr_start_date'].'</td>';
		}
			echo '</table> </center>';
?>