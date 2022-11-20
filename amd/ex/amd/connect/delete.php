<?php
session_start();
require_once("connect.php");

$name=$_POST['name'];
$stmt=$conn->prepare
    ("delete form user where id =:id");
$stmt->bindparam("name",$name);
$stmt->execute();

header("location:")
?>