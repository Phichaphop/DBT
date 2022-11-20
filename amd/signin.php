<!DOCTYPE html>

<?php
session_start();
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
    <article>
            <?php
            if (isset($_SESSION['error'])) {
                echo $_SESSION['error'];
                unset($_SESSION['error']);
            }
            ?>
            <h1>เข้าสู่ระบบ</h1>
            <form action="conn/signin_action.php" method="POST">
                <input name="id" type="text" maxlength="13" placeholder="รหัสบัตรประชาชน">
                <input name="pass" type="text" maxlength="6" placeholder="รหัสผ่าน 6 ตัว">
                <button class="pr-btn" name="signin" type="submit">เข้าสู่ระบบ</button>
            </form>
            <button class="se-btn" onclick="document.location='signup.php'">ยังไม่มีบัญชี? สมัครสมาชิก</button>
        </<article>
    </section>
        </div>
</body>

</html>