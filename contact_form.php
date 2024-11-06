<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Crepeau Painting - Contact Us</title>
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
	<div id="contact-header">
		Want to get a quote? Have any other questions?<br>
	</div>
	<div id="contact-form">
		Thank you, <?php echo $_POST["name"]; ?>.<br>
		Your email address is: <?php echo $_POST["email"]; ?><br>
		Your phone number is: <?php echo $_POST["phone"]; ?><br>
		Your submission has been recieved.<br>
		<?php
			$name = $_POST["name"];
			$email = $_POST["email"];
			$phone = $_POST["phone"];
			$servername = "localhost";
			$username = "root";
			$password = "";
			$dbname = "contact_records";
			if(empty($name) || empty($email) || empty($phone) || strlen($name) > 40 || strlen($email) > 50 || strlen($phone) > 15){
				header('Location: contact_us_error.html');
				exit;
			}
			$conn = new mysqli($servername, $username, $password, $dbname);
			if ($conn->connect_error){
				die("Connection failed: " . $conn->connect_error);
			}

			$sql = "INSERT INTO customer_table (Name, Email, Phone)
			VALUES ('$name', '$email', '$phone')";

			if ($conn->query($sql) === TRUE){
				echo "New record created successfully.";
			}else{
				echo "Error: " . $sql . "<br>" . $conn->error;
			}

			$conn->close();
		?>
	</div>
</body>
</html>
