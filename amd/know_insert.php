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
    $_SESSION['error'] = 'กรุณาเข้าสู่ระบบก่อนค่ะ';
    header("location: signin.php");
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
            <form action="conn/insert_know.php" method="POST">
                <input name="title" type="text" maxlength="50" placeholder="ชื่อเรื่อง" required>
                <input name="detail" type="text" maxlength="100" placeholder="เนื้อหา" required>
                <button name="inset" type="submit">เพิ่มความรู้</button>
            </form>
        </article>
    </section>

</body>

</html>