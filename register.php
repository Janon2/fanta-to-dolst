<?php
include "db.php";

if (isset($_POST['register'])) {

    $username = trim($_POST['username']);
    $password = trim($_POST['password']);

    // 1️⃣ ตรวจสอบกรอกครบ
    if ($username == "" || $password == "") {
        $error = "กรุณากรอกข้อมูลให้ครบ";

    // 2️⃣ อนุญาตเฉพาะตัวอักษรไทย อังกฤษ และเว้นวรรค
    } elseif (!preg_match('/^[a-zA-Zก-๙\s]+$/u', $username)) {
        $error = "ชื่อผู้ใช้ต้องเป็นตัวอักษรเท่านั้น (ห้ามมีตัวเลขหรืออักขระพิเศษ)";

    } else {

        // 3️⃣ ตรวจสอบ username ซ้ำ
        $stmt = $conn->prepare("SELECT id FROM users WHERE username = ?");
        $stmt->bind_param("s", $username);
        $stmt->execute();
        $stmt->store_result();

        if ($stmt->num_rows > 0) {
            $error = "ชื่อผู้ใช้นี้มีอยู่แล้ว";
        } else {

            // 4️⃣ บันทึกข้อมูล
            $hash = password_hash($password, PASSWORD_DEFAULT);
            $stmt = $conn->prepare("INSERT INTO users (username, password) VALUES (?, ?)");
            $stmt->bind_param("ss", $username, $hash);
            $stmt->execute();

            header("Location: login.php");
            exit();
        }
    }
}
?>
<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <title>สมัครสมาชิก</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">
    <h1>สมัครสมาชิก</h1>

    <?php if (isset($error)): ?>
        <p style="color:red;"><?php echo $error; ?></p>
    <?php endif; ?>

    <form method="post">
        <input type="text"
               name="username"
               placeholder="ชื่อผู้ใช้"
               required
               pattern="[A-Za-zก-๙\s]+"
               title="กรอกได้เฉพาะตัวอักษร"
               oninput="this.value = this.value.replace(/[^A-Za-zก-๙\s]/g, '')">

        <input type="password"
               name="password"
               placeholder="รหัสผ่าน"
               required>

        <button type="submit" name="register">สมัครสมาชิก</button>
    </form>

    <p style="text-align:center;margin-top:10px;">
        มีบัญชีแล้ว? <a href="login.php">เข้าสู่ระบบ</a>
    </p>
</div>

</body>
</html>
