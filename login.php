<?php
session_start();
include('connect.php');
include('function.inc.php');
$msg="";
$username="";
$password="";
if(isset($_POST['submit'])){
	$username=($_POST['username']);
	$password=($_POST['password']);
	
	$sql="select * from user_info where username='$username' and password='$password'";
	$res=mysqli_query($con,$sql);
	if(mysqli_num_rows($res)>0){
		$row=mysqli_fetch_assoc($res);
		$_SESSION['IS_LOGIN']='yes';
		$_SESSION['ADMIN_USER']=$row['name'];
		redirect('project.php');
	}else{
		$msg="Please enter valid login details";
	}
}
?>