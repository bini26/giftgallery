<?php
	$firstName = $_POST['firstname'];
	$lastName = $_POST['lastname'];
	$address = $_POST['address'];
	$email = $_POST['email'];
	$password = $_POST['password'];
	$phone = $_POST['phone'];
    $username =$_POST['username'];
     $status = 1;
	
	$conn = new mysqli("localhost","root","","souvenir");
if($conn->connect_error){
    die("Failed to connect:".$conn->connect_error);
}
 else {
		$stmt = $conn->prepare("insert into user_info(firstName, lastName, address, email, password, phone ,username,status) values(?, ?, ?, ?, ?, ?,?,?)");
		$stmt->bind_param("ssssssss", $firstName, $lastName, $address, $email, $password, $phone,$username,$status);
		$execval = $stmt->execute();
		echo $execval;
		echo "<script> alert('Register Sucessfully');
		window.location.href='login1.php';
		</script>";
		$stmt->close();
		$conn->close();
	}
?>
