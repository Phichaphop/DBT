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
            <div class="box-item">

                
            </div>
        </article>
    </section>

</body>

</html>