<!DOCTYPE html>

<html>

    <?php
        include 'head.php';
    ?>

<body>
<?php
    include 'header.php';
?>

    <section>
        <div class="box-item">
            
            <form action="conn/signup_action.php" method="POST">
                <h1>สมัครสมาชิก</h1>
                <input name="id" type="text" maxlength="13" placeholder="รหัสบัตรประชาชน">
                <input name="pass" type="password" maxlength="6" placeholder="รหัสผ่าน 6 ตัว">
                <button class="pr-btn" name="signup" type="submit">สมัครสมาชิก</button>
                
            </form>
            <button class="se-btn" onclick="document.location='signin.php'">มีบัญชีแล้ว? เข้าสู่ระบบ</button>
        </div>
    </section>
</body>

</html>