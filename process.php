<?php

// $connect = mysqli_connect("localhost", "root", "", "classphp");

$servername = "localhost";
$username = "root";
$password = "";
$dbnme = "Exam";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbnme);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

if(isset($_POST['savedata'])) {
	$name = $_POST['name'];
	$phone = $_POST['phone'];
	$email = $_POST['email'];
	$address = $_POST['address'];

	if($name=="") {
		echo "Please enter name";
	} elseif($phone=="") {
		echo "enter your phone no";
	} elseif($email=="") {
		echo "enter you email id";
	} else {

		$sqlinsert = "INSERT INTO student1 (name, phone, email, address) VALUES ('$name', '$phone', '$email', '$address')";

		// Object Oriented

		if ($conn->query($sqlinsert) === TRUE) {
			echo "New record created successfully";
		} else {
			echo "Error";
		}

		// Procedural

		// if (mysqli_query($conn, $sqlinsert)) {
		//   	echo "New record created successfully";
		// } else {
		//   	echo "Error: " . $sql . "<br>" . mysqli_error($conn);
		// }

	}

}

?>