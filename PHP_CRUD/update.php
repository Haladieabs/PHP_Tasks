<?php
require_once 'config.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $address = $_POST['address'];
    $salary = $_POST['salary'];

    $query = "UPDATE Employees SET Name = ?, Address = ?, Salary = ? WHERE id = ?";
    $statement = $pdo->prepare($query);
    $statement->execute([$name, $address, $salary, $id]);

    header('Location: index.php');
    exit();
}

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    
    $query = "SELECT * FROM Employees WHERE id = ?";
    $statement = $pdo->prepare($query);
    $statement->execute([$id]);
    $employee = $statement->fetch(PDO::FETCH_ASSOC);
} else {
    echo "Invalid employee ID.";
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Update Employee</title>
</head>
<body>
    <h1>Update Employee</h1>
    <form method="post">
        <input type="hidden" name="id" value="<?= $employee['id'] ?>">
        <label>Name: <input type="text" name="name" value="<?= $employee['Name'] ?>"></label><br>
        <label>Address: <input type="text" name="address" value="<?= $employee['Address'] ?>"></label><br>
        <label>Salary: <input type="number" name="salary" value="<?= $employee['Salary'] ?>"></label><br>
        <button type="submit">Update Employee</button>
    </form>
    <a href="index.php">Back to Employee List</a>
</body>
</html>
