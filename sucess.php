<?php
session_start();

$pid=$_GET['oid'];
$amt=$_GET['amt'];
$ref=$_GET['refId'];
$scd="EPAYTEST";
$url = "https://uat.esewa.com.np/epay/transrec";
$data =[
    'amt'=> $amt,
    'rid'=>$ref,
    'pid'=>$pid,
    'scd'=> $scd
];

    $curl = curl_init($url);
    curl_setopt($curl, CURLOPT_POST, true);
    curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
    $response = curl_exec($curl);
if(strpos($response,"Success")!==false){
    $_SESSION['Payment']=true;
    echo"<script> alert('Payment Sucessful');
    window.location.href='cart.php';</script>";
}
else{
    echo"<script> alert('Payment Failed');
window.location.href='cart.php';</script>";
}
    curl_close($curl);

?>