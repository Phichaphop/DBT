<header>

<div class="group-menu">
    <div class="item-menu">
        <img src="img/logo.png">
    </div>
    <div class="item-menu">
        <a href="index.php">หน้าแรก</a>
    </div>
</div>
<div class="group-menu">
    <div class="item-menu">
        <?php
        require_once 'conn/conn.php';
        if (isset($_SESSION['admin'])) {
            $stmt = $conn->query("SELECT * FROM user WHERE id = $id");
            $stmt->execute();
            $row = $stmt->fetch(PDO::FETCH_ASSOC);
        } else if (isset($_SESSION['doctor'])) {
            $stmt = $conn->query("SELECT * FROM user WHERE id = $id");
            $stmt->execute();
            $row = $stmt->fetch(PDO::FETCH_ASSOC);
        } else if (isset($_SESSION['user'])) {
            $stmt = $conn->query("SELECT * FROM user WHERE id = $id");
            $stmt->execute();
            $row = $stmt->fetch(PDO::FETCH_ASSOC);
        } else {

        }
        ?>

        <div class="item-header">
            <?php
            if (isset($_SESSION['admin'])) {
                echo $row['fname'] . ' ' . $row['role'];
                echo "<a href='conn/logout.php'>ออกจากระบบ</a>";
            } else if (isset($_SESSION['doctor'])) {
                echo $row['fname'] . ' ' . $row['role'];
                echo "<a href='conn/logout.php'>ออกจากระบบ</a>";
            } else if (isset($_SESSION['user'])) {
                echo $row['fname'] . ' ' . $row['role'];
                echo "<a href='conn/logout.php'>ออกจากระบบ</a>";
            } else {
                echo "ยังไม่เข้าสู่ระบบ";
                echo "<a href='signin.php'>เข้าสุ่ระบบระบบ</a>";
            }
            ?>
        </div>
        
    </div>
</div>

</header>