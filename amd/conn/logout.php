<?php 
    session_start();
    unset($_SESSION['user']);
    unset($_SESSION['admin']);
	unset($_SESSION['doctor']);
    header('location: /amd/signin.php');
?>