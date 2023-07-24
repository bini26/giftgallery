
<?php
include("connect.php");
$name=$_POST['name'];
$email=$_POST['email'];
$msg=$_POST['msg'];
$subject=$_POST['subject'];

$sql="INSERT INTO contact(name,email,msg,subject,status) values('$name','$email','$msg','$subject',1)";
$result=$con->query($sql);
echo" <script> alert('Message sent sucessfully. Thank You for you Feedback');
window.location.href='contact.php';</script>"
?>