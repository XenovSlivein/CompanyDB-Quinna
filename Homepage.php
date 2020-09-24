<?php
// Create database connection using config file
include_once("D:\\Xampp\\htdocs\\CompanyDB-Quinna\\config.php");

// Fetch all users data from database
$result = mysqli_query($mysqli, "SELECT * FROM employee WHERE active_status=1 ORDER BY worker_id ASC");
?>

<html>
	<head>
		<meta charset="utf-8">
		<title>Home Page</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<!-- Links -->
		<link rel="stylesheet" href="style.css">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
		  
		<!-- Scripts -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
		<script src="https://kit.fontawesome.com/a076d05399.js"></script>
	</head>
	<body>
		<div class="container">
			<nav id="mySidenav" class="sidenav">
				<ul>
					<li>
						<a class="sidelink homepagelink" href="Homepage.php">
							<img src="q_queen.png" width="250" height="200" alt="homepagelogo" />
						</a>
					</li>
					<br/>
					<li><a class="sidelink activelink" href="Branch/index.php">Branch</a></li><br/>
					<li><a class="sidelink activelink" href="Client/index.php">Client</a></li><br/>
					<li><a class="sidelink activelink" href="Employee/index.php">Employee</a></li><br/>
					<li><a class="sidelink activelink" href="Supplier/index.php">Supplier</a></li>
				</ul>
			</nav>

			<div class="contact-title main">
				<h1>WELCOME TO Q</h1>
				<br/>
			</div>

			<div class="row">
    			<div class="col-lg-4">
    			  	<h2>About Me</h2>
    			  	<!-- <h5>Photo of me:</h5>
    			  	<div class="fakeimg">Fake Image</div> -->
    			  	<p>Hello there, My name is Q. I am a student in XXX University major in Computer Science.</p>

				  	<h3>Some Links</h3>
    			  	<!-- <p>Lorem ipsum dolor sit ame.</p> -->
    			  	<ul class="nav nav-pills flex-column">
    			  	  	<li class="nav-item">
    			  	  	  	<a class="nav-link" href="Branch/index.php">Branch</a>
    			  	  	</li>
    			  	  	<li class="nav-item">
    			  	  	  	<a class="nav-link" href="Client/index.php">Client</a>
    			  	  	</li>
    			  	  	<li class="nav-item">
    			  	  	  	<a class="nav-link" href="Employee/index.php">Employee</a>
    			  	  	</li>
    			  	  	<li class="nav-item">
    			  	  	  	<a class="nav-link" href="Supplier/index.php">Supplier</a>
    			  	  	</li>
    			  	</ul>
    			  	<hr class="d-sm-none">
				</div>
				
    			<div class="col-lg-8">
    			  	<h2>TITLE HEADING</h2>
    			  	<h5>Title description, Dec 7, 2017</h5>
    			  	<div class="fakeimg">Fake Image</div>
    			  	<p>Some text..</p>
    			  	<p>Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>
    			  	<br>
    			  	<h2>TITLE HEADING</h2>
    			  	<h5>Title description, Sep 2, 2017</h5>
    			  	<div class="fakeimg">Fake Image</div>
    			  	<p>Some text..</p>
    			  	<p>Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>
    			</div>
  			</div>
		</div>
	</body>
</html>

