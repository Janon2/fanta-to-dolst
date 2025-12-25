<?php
include "db.php";
session_start();

if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $result = $conn->query("SELECT * FROM users WHERE username='$username'");
    $user = $result->fetch_assoc();

    if ($user && password_verify($password, $user['password'])) {
        $_SESSION['user'] = $user['username'];
        header("Location: dashboard.php");
        exit();
    } else {
        $error = "ชื่อผู้ใช้หรือรหัสผ่านไม่ถูกต้อง";
    }
}
?>

<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <title>เข้าสู่ระบบ</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="container">
    <h1>เข้าสู่ระบบ</h1>

    <?php if (isset($error)) echo "<p style='color:red'>$error</p>"; ?>

    <form method="post">
        <input type="text" name="username" placeholder="ชื่อผู้ใช้" required>
        <input type="password" name="password" placeholder="รหัสผ่าน" required>
        <button type="submit" name="login">เข้าสู่ระบบ</button>
    </form>
    <p style="text-align:center; margin-top:10px;">
        ยังไม่มีบัญชี? <a href="register.php">สมัครสมาชิก</a>
    </p>

</div>
</body>
</html>
    