	<header>
		<div class="group-nav">
			<div class="item-nav">
				<a href="index.php"><img class="logo" src="img/home.png" onClick="ducument.location='index.php'"></a>
			</div>
		</div>
		<div class="group-nav">
			<div class="item-nav">
				<img class="logo" src="img/logo.png">
			</div>
		</div>
		<div class="group-nav">
			<div class="item-nav">
				<?php
					if(isset($_SESSION['admin'])) {
						$id = $_SESSION['admin'];
						echo $id;
						echo 'admin';
						echo '<a href="connect/logout.php">ออกจากระบบ</a>';
					}else if(isset($_SESSION['admin'])){
						$id = $_SESSION['doctor'];
						echo $id;
						echo 'doctor';
						echo '<a href="connect/logout.php">ออกจากระบบ</a>';
					}else if(isset($_SESSION['user'])) {
						$id = $_SESSION['user'];
						echo 'คนไข้';
						echo '<a href="connect/logout.php">ออกจากระบบ</a>';
					}else {
						echo 'ผู้เยี่ยมชม';
						echo '<a href="signin.php">เข้าสู่ระบบ</a>';
					}
				
				?>
			
			</div>
			<div class="logo" class="item-nav">
				<img class="logo" src="img/voc.png">
			</div>
		</div>
	</header>