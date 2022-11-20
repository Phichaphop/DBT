<?php
    session_start();
    require_once 'conn.php';

    $id = $_POST['id'];
    $title = $_POST['title'];
    $detail = $_POST['detail'];

    try {
        $stmt = $conn->prepare("UPDATE user SET title=:title, detail=:detail WHERE id=:id");

		$stmt->bindParam(":id", $id);
        $stmt->bindParam(":title", $title);
        $stmt->bindParam(":detail", $detail);
        $stmt->execute();
		header("location: /amd/know.php");

    }catch(PDOException $e) {
        echo $e->getMessage();
    }
?>