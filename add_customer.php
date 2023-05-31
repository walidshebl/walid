<?php
$host = 'localhost';
$username = 'root';
$password = '';
$database = 'shoaib';

$conn = mysqli_connect($host, $username, $password, $database);

if (!$conn) {
  die('Connection failed: ' . mysqli_connect_error());
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	$name = $_POST['name'];
	$address = $_POST['address'];
	$phone = $_POST['phone'];
	$email = $_POST['email'];

	$sql = "INSERT INTO customer ( name , address , phone, email) 
	                      VALUES ('$name', '$address', '$phone', '$email')";

	if (mysqli_query($conn, $sql)) {
		echo 	header("Location: shoeab.html");;
	} else {
		echo 'Error: ' . mysqli_error($conn);
	}

	mysqli_close($conn);
}
?>


