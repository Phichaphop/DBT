<?php
    $server = "localhost";
    $user = "root";
    $pass =  "";
    $db = "amd";

    try {
        $conn = new PDO ("mysql:host=$server;dbname=$db",$user,$pass);
        $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        
    }catch(PDOException $e) {
        echo 'เชื่อมต่อฐานข้อมูลสำเร็จ';
    }
?>