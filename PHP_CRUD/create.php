<?php
require_once 'config.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];
    $address = $_POST['address'];
    $salary = $_POST['salary'];

    $query = "INSERT INTO Employees (Name, Address, Salary) VALUES (?, ?, ?)";
    $statement = $pdo->prepare($query);
    $statement->execute([$name, $address, $salary]);

    header('Location: index.php');
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Create Employee</title>
</head>
<body>
    <h1>Create Employee</h1>
    <form method="post">
        <h2>Name: <input type="text" name="name"></h2><br>
        <h2>Address: <input type="text" name="address"></h2><br>
        <h2>Salary: <input type="number" name="salary"></h2><br>
        <button type="submit">Add Employee</button>
    </form>
    <a href="index.php">Back to Employee List</a>
</body>
</html>
