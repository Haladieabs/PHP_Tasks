<?php
require("conn.php");

try {
    $sql = "SELECT * FROM company";
    $stmt = $conn->query($sql);

    echo "<table>";
    echo "<tr><th>id</th><th>user name</th><th>user address</th><th>salary</th></tr>";
    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        echo "<tr><td>{$row['id']}</td><td>{$row['username']}</td><td>{$row['useraddress']}</td><td>{$row['salary']}</td></tr>";
    }
    echo "</table>";
} catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
}
?>
