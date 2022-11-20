<?php
    session_start();
    require_once 'conn.php';

    $id = $_POST['id'];
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
	$sex = $_POST['sex'];
	$bd = $_POST['bd'];
    $age = $_POST['age'];
    $height = $_POST['height'];
    $weight = $_POST['weight'];
	$bg = $_POST['bg'];
    $condis = $_POST['condis'];
    $drugy = $_POST['drugy'];
    $tel = $_POST['tel'];
    $email = $_POST['email'];

    try {
        $stmt = $conn->prepare("UPDATE user SET fname=:fname, lname=:lname, 
		sex=:sex, bd=:bd, age=:age, height=:height, weight=:weight, 
		bg=:bg, condis=:condis, drugy=:drugy, tel=:tel, email=:email
		WHERE id=:id");

		$stmt->bindParam(":id", $id);
        $stmt->bindParam(":fname", $fname);
        $stmt->bindParam(":lname", $lname);
		$stmt->bindParam(":sex", $sex);
		$stmt->bindParam(":bd", $bd);
		$stmt->bindParam(":age", $age);
        $stmt->bindParam(":height", $height);
        $stmt->bindParam(":weight", $weight);
		$stmt->bindParam(":bg", $bg);
        $stmt->bindParam(":condis", $condis);
        $stmt->bindParam(":drugy", $drugy);
        $stmt->bindParam(":tel", $tel);
        $stmt->bindParam(":email", $email);
        $stmt->execute();
		header("location: /amd/signin.php");

    }catch(PDOException $e) {
        echo $e->getMessage();
    }
?>