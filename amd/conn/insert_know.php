<?php
    session_start();
    require_once 'conn.php';

    $title = $_POST['title'];
    $detail = $_POST['detail'];
    
    try {

        $stmt = $conn->prepare("INSERT INTO pr (id, title, detail)
        VALUES(NULL, :title, :detail)");
        $stmt->bindParam(":title", $title);
        $stmt->bindParam(":detail", $detail);
        $stmt->execute();

        header("location: /amd/know.php");

    }catch(PDOException $e) {
        echo $e->getMessage();
        header("location: /amd/know.php");
    }
?>