<?php
require("conn.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST["w"];
    $username = $_POST["x"];
    $address=$_POST["y"];
    $salary=$_POST["z"];

    try {
        $sql = "INSERT INTO company (id, username, useraddress, salary) VALUES (:id, :username, :useraddress, :salary)";
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':id', $id);
        $stmt->bindParam(':username', $username);
        $stmt->bindParam(':useraddress', $useraddress);
        $stmt->bindParam(':salary', $salary);
        $stmt->execute();
        echo "Data inserted successfully";
    } catch(PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
}
?>
