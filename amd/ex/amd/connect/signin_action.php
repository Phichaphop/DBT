<?php
	session_start();
	require_once'conn.php';

	$id = $_POST['id'];
	$pass = $_POST['pass'];

	echo $id;echo $pass;

	try {
	$check_data = $conn->prepare("SELECT * FROM user WHERE id = :id");
	$check_data->bindParam(":id", $id);
	$check_data->execute();
	$row = $check_data->fetch(PDO::FETCH_ASSOC);

	if ($id == $row['id']) {
		
		if ($pass == $row['pass']) {
			
			if ($row['role'] == '1') {
				
				$_SESSION['admin'] = ['id'];
				header("location: /amd/home.php");
				
				if ($row['role'] == '2') {
					$_SESSION['doctor'] = ['id'];
					header("location: /amd/home.php");
				}else{
					$_SESSION['user'] = ['id'];
					header("location: /amd/home.php");
				}
			}else{
				$_SESSION['user'] = ['id'];
				header("location: /amd/home.php");
			}
		}else{
			$_SESSION['error'] = 'Incorrect Password';
			header("location: /amd/signin.php");
		}
	}else{
		$_SESSION['error'] = 'Incorrect Email';
		header("location: /amd/signin.php");
	}
		
	}catch (PDOException $e){
		echo 'ไม่ได้จ้า';
	}
?>