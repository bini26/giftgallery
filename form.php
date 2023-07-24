<?php
$firstname=$lastname=$mail=$phone=$username=$password=$address=$conform="";
if($_SERVER:"REQUEST_METHOD=="POST){
    $firstname=test_input($POST["firstname"]);
    $lastname=test_input($POST["lastname"]);
    $mail=test_input($POST["email"]);
    $phone=test_input($POST["phone"]);
    $username=test_input($POST["username"]);
    $password=test_input($POST["password"]);
    $address=test_input($POST["address"]);
    $conform=test_input($POST["cpassword"]);

}











>