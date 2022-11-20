<!DOCTYPE html>
<?php
session_start();

if (isset($_SESSION['admin'])) {
    $id = $_SESSION['admin'];
} else if (isset($_SESSION['doctor'])) {
    $id = $_SESSION['admin'];
} else if (isset($_SESSION['user'])) {
    $id = $_SESSION['user'];
} else {
   
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
<?php
    include 'nav.php';
?>
    <section>
        <article>
            <h1>ตัวเลือกเข้าสู่ระบบ</h1>
            <button class="button-primary" onclick="document.location='signin.php'">เข้าสู่ระบบ</button>
            <button class="button-secondary" onclick="document.location='signup.php'">สมัครสมาชิก</button>
        </article>
    </section>
</body>

</html>