<nav id="nav">
    <article>
        <div class="group">

            <?php if (isset($_SESSION['admin'])) {
                echo "<div class='menu'>";
                echo "<a href='know.php'>จัดการความรู้</a>";
                echo "</div>";
                echo "<div class='menu'>";
                echo "<a href='#'>จัดการนัดหมาย</a>";
                echo "</div>";
                echo "<div class='menu'>";
                echo "<a href='#'>จัดการผู้ใช้</a>";
                echo "</div>";
                echo "<div class='menu'>";
                echo "<a href='#'>จัดการหมอ</a>";
                echo "</div>";
                echo "<div class='menu'>";
                echo "<a href='#'>จัดการคนไข้</a>";
                echo "</div>";
            } else if (isset($_SESSION['doctor'])) {
                echo "<div class='menu'>";
                echo "<a href='know.php'>ความรู้</a>";
                echo "</div>";
                echo "<div class='menu'>";
                echo "<a href='#'>นัดหมาย</a>";
                echo "</div>";
                echo "<div class='menu'>";
                echo "<a href='#'>ถามตอบปัญหา</a>";
                echo "</div>";
                echo "<div class='menu'>";
                echo "<a href='#'>แก้ไขบัญชี</a>";
                echo "</div>";
            } else if (isset($_SESSION['user'])) {
                echo "<div class='menu'>";
                echo "<a href='know.php'>ความรู้</a>";
                echo "</div>";
                echo "<div class='menu'>";
                echo "<a href='#'>นัดหมาย</a>";
                echo "</div>";
                echo "<div class='menu'>";
                echo "<a href='#'>ถามตอบปัญหา</a>";
                echo "</div>";
                echo "<div class='menu'>";
                echo "<a href='#'>แก้ไขบัญชี</a>";
                echo "</div>";
            } else {
                echo "<div class='menu'>";
                echo "<a href='index.php'>หน้าแรก</a>";
                echo "</div>";
            }
            ?>
        </div>
    </article>
</nav>