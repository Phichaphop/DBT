<!doctype html>
<?php 
    session_start();
    require_once 'connect/conn.php';
    if (!isset($_SESSION['doctor'])) {
        header('location: signin.php');
    }
?>

<html>
	<?php
		include 'head.php';
	?>
<body>
	<?php
		include 'header.php';
	?>
	
	<section>
		<div class="group-item">
			<button type="submit" class="item-menu" onClick="document.location='signin.php'">
				<h1>ข่าวสาร</h1>
			</button>
			<button type="submit" class="item-menu" onClick="document.location='signup.php'">
				<h1>ถามตอบปัญหา</h1>
			</button>
			<button type="submit" class="item-menu" onClick="document.location='signup.php'">
				<h1>นัดหมาย</h1>
			</button>
			<button type="submit" class="item-menu" onClick="document.location='signup.php'">
				<h1>คนไข้</h1>
			</button>
		</div>
		
</body>
</html>