<?php
session_start();
include('finction.inc.php');
unset($_SESSION['IS_LOGIN']);
unset($_SESSION['cart']);
unset($_SESSION['username']);
unset($_SESSION['userid']);
unset($_SESSION['Payment']);
redirect('project.php');
?>