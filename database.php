<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Crepeau Painting - Database</title>
<link rel="stylesheet" href="style.css">
</head>
<body>
<header>
	<div id="top-header">
		<div id="logo">
			<img src="images/logo.png" />
		</div>
		<nav>
		<div id="menu">
			<ul>
				<li class="active"><a href="index.html">Home</a></li>
				<li><a href="contact_us.html">Contact Us</a></li>
				<li><a href="gallery.html">Gallery</a></li>
				<li><a href="careers.html">Careers</a></li>
				<li><a href="about_us.html">About Us</a></li>
				<li><a href="database.html">Database</a></li>
			</ul>
		</div>
		</nav>
	</div>
	<div id="header-menu">
	</div>
</header>
	<div id="database-header">
		<?php
			$pass = $_POST["pass"];
			if ($pass != "password"){
				die("Wrong password.");
			}
		?>
		Customer Records<br>
	</div>
	<div id="database">
		 <?php
			$servername = "localhost";
			$username = "root";
			$password = "";
			$dbname = "contact_records";

			$conn = new mysqli($servername, $username, $password, $dbname);
			if ($conn->connect_error){
				die("Connection failed: " . $conn->connect_error);
			}

			$sql = "SELECT Name, Email, Phone FROM customer_table";
			$result = $conn->query($sql);

			if ($result->num_rows > 0){
			  while($row = $result->fetch_assoc()){
				echo "Name: " . $row["Name"]. " - Email: " . $row["Email"]. "  - Phone: " . $row["Phone"]. "<br>";
			  }
			}else{
			  echo "0 results";
			}
			$conn->close();
		?>
	</div>
	<div id="database-header">
		Candidate Records<br>
	</div>
	<div id="database">
		 <?php
			$servername = "localhost";
			$username = "root";
			$password = "";
			$dbname = "career_records";

			$conn = new mysqli($servername, $username, $password, $dbname);
			if ($conn->connect_error){
				die("Connection failed: " . $conn->connect_error);
			}

			$sql = "SELECT Name, Email, Phone FROM candidate_table";
			$result = $conn->query($sql);

			if ($result->num_rows > 0){
			  while($row = $result->fetch_assoc()){
				echo "Name: " . $row["Name"]. " - Email: " . $row["Email"]. "  - Phone: " . $row["Phone"]. "<br>";
			  }
			}else{
			  echo "0 results";
			}
			$conn->close();
		?>
	</div>
</body>
</html>
