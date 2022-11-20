<?php
    session_start();
    require_once 'conn.php';

    $id = $_POST['id'];
    $pass = $_POST['pass'];
    $role = 'user';
    
    try {

        $stmt = $conn->prepare("INSERT INTO user (id, pass, role)
        VALUES(:id, :pass, :role)");
        $stmt->bindParam(":id", $id);
        $stmt->bindParam(":pass", $pass);
        $stmt->bindParam(":role", $role);
        $stmt->execute();

        $_SESSION['user'] = $id;
        header("location: /amd/signup_member.php");

    }catch(PDOException $e) {
        echo $e->getMessage();
        header("location: /amd/signup.php");
    }
?>