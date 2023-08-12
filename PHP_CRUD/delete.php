<?php
require_once 'config.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $query = "UPDATE Employees SET deleteFlag='1'  WHERE id = ?";
    $statement = $pdo->prepare($query);
    $statement->execute([$id]);

    header('Location: index.php');
    exit();
} else {
    echo "Invalid employee ID.";
    exit();
}


?>
