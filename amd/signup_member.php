<!DOCTYPE html>
<?php
    session_start();
    $id = $_SESSION['user'];
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
    <div class="box-item">
        <h1>ข้อมูลส่วนตัว</h1>
        <form action="conn/signup_member_action.php" method="POST">
        <input name="id" value="<?= $id ?>" type="text" maxlength="13" placeholder="รหัสบัตรประชาชน">
        <input name="fname" type="text" maxlength="50" placeholder="ชื่อต้น" required>
        <input name="lname" type="text" maxlength="50" placeholder="นามสกุล" required>
        <select name="sex" required>
            <option value="">เลือกเพศ</option>
            <option value="ชาย">ชาย</option>
            <option value="หญิง">หญิง</option>
        </select>
        <input name="bd" type="date" maxlength="50" placeholder="วันเกิด" required>
        <input name="age" type="number" maxlength="3" placeholder="อายุ" required>
        <input name="height" type="number" maxlength="3" placeholder="ส่วนสูง" required>
        <input name="weight" type="number" maxlength="3" placeholder="น้ำหนัก" required>
        <select name="bg" required>
            <option value="">กลุ่มเลือด</option>
            <option value="A">A</option>
            <option value="AB">AB</option>
            <option value="B">B</option>
            <option value="O">O</option>
        </select>
        <input name="condis" type="text" maxlength="50" placeholder="โรคประจำตัว อธิบาย" required>
        <input name="drugy" type="text" maxlength="50" placeholder="ยาที่แพ้" required>
        <input name="tel" type="text" maxlength="10" placeholder="เบอร์โทรศัพท์มือถือ" required>
        <input name="email" type="text" maxlength="50" placeholder="ที่อยู่อีเมล์" required>
        <button name="signup" type="submit">สมัครสมาชิก</button>
        </form>
</div>
        </section>
    </body>
</html>