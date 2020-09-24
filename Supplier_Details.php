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
			<h1>SUPPLIER INFORMATION</h1>
			<br>
		</div>
		<div>
			<table class="table" height="30%">
	 			<tr>
					<th>Supplier Name</th>
					<th>Supply Type</th>
				</tr>
		</div>
	</body>
</html>

<?php
			$con=mysqli_connect("localhost","root", "","companydb");
			$mysql_run=mysqli_query($con, "SELECT * FROM branch_supplier ORDER BY supplier_name ASC");
		
			while ($row=mysqli_fetch_assoc($mysql_run)) {
					
			echo '<tr><td>'.$row['supplier_name'].'</td>';
			echo '<td>'.$row['supply_type'].'</td>';
		}
			echo '</table> </center>';
?>