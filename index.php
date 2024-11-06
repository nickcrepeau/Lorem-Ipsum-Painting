<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
<?php
$servername = "localhost";
$username = "root";
$password = "";

$conn = new MySQLi($servername, $username, $password);

if ($conn->connect_error){
	die("Connection failed: " . $conn->connect_error);
}

echo "Connected successfully";
?>
</body>
</html>