<?php
	$firstName = $_POST['firstName'];
	$lastName = $_POST['lastName'];
	$address = $_POST['address'];
	$email = $_POST['email'];
	$password = $_POST['password'];
	$phone = $_POST['phone'];
    $username =$_POST['username'];

	// Database connection
	$conn = new mysqli('localhost','root','','souvenir');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$stmt = $conn->prepare("insert into user_info(firstName, lastName, address, email, password, phone ,username) values(?, ?, ?, ?, ?, ?,?)");
		$stmt->bind_param("sssssss", $firstName, $lastName, $address, $email, $password, $phone,$username);
		$execval = $stmt->execute();
		echo $execval;
		echo "Registration successfully...";
		$stmt->close();
		$conn->close();
	}
?>