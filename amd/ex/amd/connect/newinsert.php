<?php
session_start();
require_once('connect.php');
$name=$_POST['name'];
$stmt=$conn->prepare("Insert Into user(id,name)Values(null,:name)");
$stmt->bindparam("name",$name);
$stmt->execute();
header("location : ///");
?>