<?php
	session_start();
	require_once 'conn.php';

	$id = $_POST['id'];
	$pass = $_POST['pass'];

	try {
	$check_data = $conn->prepare("SELECT * FROM user WHERE id = :id");
	$check_data->bindParam(":id", $id);
	$check_data->execute();
	$row = $check_data->fetch(PDO::FETCH_ASSOC);

	if ($id == $row['id']) {
		
		if ($pass == $row['pass']) {
			
			if ($row['role'] == 'admin') {
				$_SESSION['admin'] = $row['id'];
				header("location: /amd/home.php");
			}else if ($row['role'] == 'doctor'){
				$_SESSION['user'] = $row['id'];
				header("location: /amd/home.php");
			}else {
				$_SESSION['user'] = $row['id'];
				header("location: /amd/home.php");
			}

		}else{
			$_SESSION['error'] = 'รหัสผ่านผิด';
			header("location: /amd/signin.php");
		}
	}else{
		$_SESSION['error'] = 'ไม่มีผู้ใช้นี้';
		header("location: /amd/signin.php");
	}
		
	}catch (PDOException $e){
		echo 'ไม่ได้จ้า';
	}
?>