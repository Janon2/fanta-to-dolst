<?php
include "db.php";
session_start();

if (isset($_POST['login'])) {

    $username = trim($_POST['username']);
    $password = trim($_POST['password']);

    if ($username == "" || $password == "") {
        $error = "กรุณากรอกข้อมูลให้ครบ";
    } elseif (!preg_match('/^[a-zA-Zก-๙\s]+$/u', $username)) {
        $error = "ชื่อผู้ใช้ต้องเป็นตัวอักษรเท่านั้น";
    } else {

        $stmt = $conn->prepare("SELECT username, password FROM users WHERE username = ?");
        $stmt->bind_param("s", $username);
        $stmt->execute();
        $result = $stmt->get_result();
        $user = $result->fetch_assoc();

        if ($user && password_verify($password, $user['password'])) {
            $_SESSION['user'] = $user['username'];
            header("Location: dashboard.php");
            exit();
        } else {
            $error = "ชื่อผู้ใช้หรือรหัสผ่านไม่ถูกต้อง";
        }
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

        <button type="submit" name="login">เข้าสู่ระบบ</button>
    </form>

    <p style="text-align:center; margin-top:10px;">
        ยังไม่มีบัญชี? <a href="register.php">สมัครสมาชิก</a>
    </p>

</div>

</body>
</html>
