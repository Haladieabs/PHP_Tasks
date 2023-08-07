<!DOCTYPE html>
<html>
<head>
    <title>To-Do List</title>
</head>
<body>
    <h1>To-Do List</h1>
    
    <form action="" method="post">
        <input type="text" name="task" placeholder="Enter task" required>
        <button type="submit" name="addTask">Add Task</button>
    </form>
    
    <?php
    session_start();

    if (!isset($_SESSION['tasks'])) {
        $_SESSION['tasks'] = array();
    }

    if (isset($_POST['addTask'])) {
        $task = $_POST['task'];
        array_push($_SESSION['tasks'], $task);
    }

    if (isset($_POST['delete'])) {
        $index = $_POST['delete'];
        if (isset($_SESSION['tasks'][$index])) {
            unset($_SESSION['tasks'][$index]);
        }
    }

    if (!empty($_SESSION['tasks'])) {
        echo "<ul>";
        foreach ($_SESSION['tasks'] as $index => $task) {
            echo "<li>$task <form action='' method='post'><button type='submit' name='delete' value='$index'>Delete</button></form></li>";
        }
        echo "</ul>";
    } else {
        echo "<p>No tasks added yet.</p>";
    }
    ?>
</body>
</html>
