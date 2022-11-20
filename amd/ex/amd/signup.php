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
		
		<form action="connect/signup_action.php" method="post">
			<h1>สมัครสมาชิก</h1>
			<input name="id" type="text" maxlength="13" placeholder="รหัสบัตรประชาชน">
			<input name="pass" type="password" maxlength="6" placeholder="รหัสผ่าน 6 ตัว">
			<button name="signup" class="pirmary-btn">สมัครสมาชิกเลย</button>
			<button class="secondary-btn" onClick="document.location='signin.php'">
				มีบัญชีแล้ว ?
				เข้าสู่ระบบเลย
			</button>
		</form>
		
	</section>
	
</body>
</html>