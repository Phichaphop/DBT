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

            <div class="box-item">
                <table>
                    <tr>
                        <th>รหัส</th>
                        <th>ชื่อเรื่อง</th>
                        <th>เนื้อหา</th>
                        <th>แก้ไข</th>
                        <th>ลบ</th>
                    </tr>
                    <?php
                    $stmt = $conn->query("SELECT * FROM pr");
                    $stmt->execute();
                    $pr = $stmt->fetchAll();

                    if (!$pr) {

                        echo "<td colspan='5'ยังไม่มีข้อมูลข่าวสาร</td>";
                    } else {
                        foreach ($pr as $prs) { ?>

                            <td><?= $prs['id']; ?></td>
                            <td><?= $prs['title']; ?></td>
                            <td><?= $prs['detail']; ?></td>
                            <td><a href="know_edit.php?id=<?= $prs['id']; ?>">แก้ไข</a></td>
                            <td><a href="conn/know_delete.php?id=<?= $prs['id']; ?>">ลบ</a></td>
                            </tr>
                    <?php }
                    } ?>
                    </tr>
                </table>

            </div>
        </article>
    </section>

</body>

</html>