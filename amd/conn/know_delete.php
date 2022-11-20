<?php
session_start();
require_once("conn.php");

$id=$_GET['id'];
$stmt=$conn->prepare("DELETE FROM pr WHERE id=:id");
$stmt->bindparam("id",$id);
$stmt->execute();

header("location: /amd/know.php")
?>