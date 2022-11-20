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
    <div class="group">
        <?php if (isset($_SESSION['admin'])) {
            echo "<div class='menu'>";
            echo "<a href='know_insert.php'>เพิ่มความรู้</a>";
            echo "</div>";
        } else if (isset($_SESSION['doctor'])) {
            echo "<div class='menu'>";
            echo "<a href='know_insert.php'>เพิ่มความรู้</a>";
            echo "</div>";
        } else if (isset($_SESSION['user'])) {
        } else {
        }
        ?>
    </div>
    <section>
        <article>
            <?php
            $id = $_GET['id'];
            require_once 'conn/conn.php';
            $stmt = $conn->query("SELECT * FROM pr WHERE id=$id");
            $stmt->execute();
            $pr = $stmt->fetch(PDO::FETCH_ASSOC);

            ?>
            <form action="conn/insert_know.php" method="POST">
                <input value="<?= $pr['id'] ?>" name="id" type="text" maxlength="13" placeholder="รหัส" readonly>
                <input value="<?= $pr['title'] ?>" name="title" type="text" maxlength="50" placeholder="ชื่อเรื่อง" required>
                <input value="<?= $pr['detail'] ?>" name="detail" type="text" maxlength="100" placeholder="เนื้อหา" required>
                <button name="update" type="submit">แก้ไขข้อมูล</button>
            </form>
        </article>
    </section>

</body>

</html>