<?php
include "db.php";

if (isset($_POST['register'])) {
    $username = trim($_POST['username']);
    $password = trim($_POST['password']);

    if ($username != "" && $password != "") {
        $hash = password_hash($password, PASSWORD_DEFAULT);

        $sql = "INSERT INTO users (username, password) VALUES ('$username', '$hash')";
        if ($conn->query($sql)) {
            header("Location: login.php");
            exit();
        } else {
            $error = "ชื่อผู้ใช้ซ้ำ";
        }
    } else {
        $error = "กรุณากรอกข้อมูลให้ครบ";
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

    <?php if (isset($error)) echo "<p style='color:red'>$error</p>"; ?>

    <form method="post">
        <input type="text" name="username" placeholder="ชื่อผู้ใช้" required>
        <input type="password" name="password" placeholder="รหัสผ่าน" required>
        <button type="submit" name="register">สมัครสมาชิก</button>
    </form>

    <p style="text-align:center;margin-top:10px;">
        มีบัญชีแล้ว? <a href="login.php">เข้าสู่ระบบ</a>
    </p>
</div>
</body>
</html>
