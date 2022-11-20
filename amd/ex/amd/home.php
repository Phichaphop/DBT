<!doctype html>
<?php 
    session_start();
    require_once 'connect/conn.php';
    if (!isset($_SESSION['admin'])) {
        header('location: signin.php');
    }else if (!isset($_SESSION['doctor'])) {
		header('location: signin.php');
	}else if(!isset($_SESSION['user'])){
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
		<?php
			if(isset($_SESSION['admin'])) {
				echo '<a>ทดสอบ</a>';
			}else if (isset($_SESSION['doctor'])) {
				echo '<a>ทดสอบ</a>';
			}else {
				echo '<a>ทดสอบ</a>';
			}
		
		?>
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
				<h1>แก้ไขบัญชี</h1>
			</button>
		</div>
		
</body>
</html>