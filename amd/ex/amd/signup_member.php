<!doctype html>
<?php
	session_start();
    $id = $_SESSION['user'];

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
		
		<form action="connect/signup_member_action.php" method="post">
			<h1>สมัครสมาชิก</h1>
			<input name="id" value='<?php echo $id ?>' type="text" maxlength="13" placeholder="รหัสบัตรประชาชน">
			<input name="fname" type="text" maxlength="50" placeholder="ชื่อต้น">
            <input name="lname" type="text" maxlength="50" placeholder="นามสกุล">
            <input name="bd" type="date" placeholder="วันเกิด">
            <input name="age" type="number" maxlength="3" placeholder="อายุ">
            <input name="height" type="number" maxlength="3" placeholder="ส่วนสูง">
			<input name="weight" type="number" maxlength="3" placeholder="น้ำหนัก">
            <input name="condis" type="text" maxlength="50" placeholder="โรคประจำตัว">
            <input name="dall" type="text" maxlength="50" placeholder="ยาที่แพ้">
            <input name="tel" type="tel" maxlength="10" placeholder="เบอร์โทรศัพท์">
            <input name="email" type="text" maxlength="50" placeholder="ที่อยู่อีเมล์">
			<button name="signup" class="pirmary-btn">เข้าสู่ระบบ</button>
		</form>
		
	</section>
	
</body>
</html>