<!doctype html>
<?php
	session_start()
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
		
		<form action="connect/signin_action.php" method="post">
			<h1>เข้าสู่ระบบ</h1>
			<input name="id" type="text" maxlength="13" placeholder="รหัสบัตรประชาชน">
			<input name="pass" type="password" maxlength="6" placeholder="รหัสผ่าน 6 ตัว">
			<button name="signin" class="pirmary-btn">เข้าสู่ระบบ</button>
		</form>
	</section>
	
</body>
</html>