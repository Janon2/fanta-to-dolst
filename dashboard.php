<?php
session_start();
if (!isset($_SESSION['user'])) {
    header("Location: login.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <title>Dashboard</title>
    <style>
        body{
            margin:0;
            font-family: Arial, sans-serif;
            background:#f2f2f2;
            height:100vh;
            display:flex;
            justify-content:center;
            align-items:center;
            
        }

        .dashboard{
           background:#ffffff;
            width:350px;
            padding:30px;
            border-radius: 50px;
            background: #e0e0e0;
            box-shadow: 20px 20px 60px #bebebe,
               -20px -20px 60px #ffffff;
            box-shadow:0 4px 12px rgba(0,0,0,0.12);
            text-align:center;
        }

        h2{
            margin-bottom:25px;
            color:#333;
        }

        .btn{
            display:block;
            width:100%;
            padding:12px;
            margin:10px 0;
            text-decoration:none;
            border-radius:6px;
            font-weight:bold;
        }

        .btn-primary{
            background:#333;
            color:#fff;
        }

        .btn-primary:hover{
            background:#000;
        }

        .btn-danger{
            background:#777;
            color:#fff;
        }

        .btn-danger:hover{
            background:#555;
        }
    </style>
</head>
<body>
<div class="dashboard">
    <h2>ยินดีต้อนรับ<br><?php echo $_SESSION['user']; ?></h2>
    <a href="index.php" class="btn btn-primary">
       To-Do List
    <a href="logout.php" class="btn btn-danger">
       Log out
    </a>
</div>

</body>
</html>
