<?php
require_once 'config.php';

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
    <title>View Employee</title>
</head>
<body>
    <h1>Employee Details</h1>
    <p><strong>ID:</strong> <?= $employee['id'] ?></p>
    <p><strong>Name:</strong> <?= $employee['Name'] ?></p>
    <p><strong>Address:</strong> <?= $employee['Address'] ?></p>
    <p><strong>Salary:</strong> <?= $employee['Salary'] ?></p>
    <a href="index.php">Back to Employee List</a>
</body>
</html>


