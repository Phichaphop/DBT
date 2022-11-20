<?php
session_start();
require_once("connect.php");

$name=$_POST['name'];
$stmt=$conn->prepare
    ("update user set name=:name,name=:name where id =:id");
$stmt->bindparam("name",$name);
$stmt->execute();

header("location:")
?>