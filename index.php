<?php
$conn = new mysqli("localhost","root","","todolist");
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_errno);
}


if (isset($_POST['addtask'])) {
    $task = trim($_POST['task']);
    $conn->query("INSERT INTO tasks (task) VALUES ('$task')");
    header("Location: index.php");
    exit();
}


if (isset($_GET['delete'])) {
    $id = $_GET['delete'];
    $conn->query("DELETE FROM tasks WHERE id=$id");
    header("Location: index.php");
    exit();
}


if (isset($_GET['complete'])) {
    $id = $_GET['complete'];
    $conn->query("UPDATE tasks SET status='completed' WHERE id=$id");
    header("Location: index.php");
    exit();
}


if (isset($_POST['edit_task'])) {
    $id = $_POST['id'];
    $task = trim($_POST['task']);
    if ($task != "") {
        $conn->query("UPDATE tasks SET task='$task' WHERE id=$id");
    }
    header("Location: index.php");
    exit();
}

$result = $conn->query("SELECT * FROM tasks ORDER BY id DESC");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>fanta-to-dolst</title>
   <link rel="stylesheet" href="style.css">

</head>
<body>
 <style>
        .back-btn{
            display:block;
            margin-top:20px;
            text-decoration:none;
            color:#555;
            font-size:14px;
        }

        .back-btn:hover{
            text-decoration:underline;
            color:#000;
        }
    </style>
</head>
<div class="container">
    <h1>To-Do List</h1>

    <form action="index.php" method="post">
        <input type="text" name="task" placeholder="Enter new task" required>
        <button type="submit" name="addtask">Add new Todo</button>
    </form>

    <ul>
    <?php while ($row = $result->fetch_assoc()): ?>
        <li class="<?php echo $row['status']; ?>">

        <?php if (isset($_GET['edit']) && $_GET['edit'] == $row['id']): ?>
          
            <form method="post" class="edit-form">
                <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
                <input type="text" name="task"
                       value="<?php echo htmlspecialchars($row['task']); ?>" required>
                <button type="submit" name="edit_task" class="btn-save">Save</button>
                <a href="index.php" class="btn-cancel">Cancel</a>
            </form>
        <?php else: ?>

            <strong><?php echo $row['task']; ?></strong>
           <div class="actions">
    <a href="index.php?complete=<?php echo $row['id']; ?>" class="complete">Complete</a>
    <a href="index.php?edit=<?php echo $row['id']; ?>" class="edit">Edit</a>
    <a href="index.php?delete=<?php echo $row['id']; ?>" class="delete">Delete</a>
            </div>
        <?php endif; ?>
        </li>
    <?php endwhile; ?>
    </ul>
    <a href="dashboard.php" class="back-btn">←Login</a>
    </p>
</div>
</body>
</html>
