<!DOCTYPE html>
<html>
<head>
    <title>Form Example</title>
</head>
<body>
    <form action="process_data.php" method="post">
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required><br><br>
        
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required><br><br>
        
        <input type="submit" value="Submit">
    </form>
</body>
</html>
<?php
if ($_SERVER["REQUEST_METHOD"] == "GET") {
    echo "Data was sent using GET method.<br>";
} elseif ($_SERVER["REQUEST_METHOD"] == "POST") {
    echo "Data was sent using POST method.<br>";
    
    $email = $_POST["email"];
    $password = $_POST["password"];
    
    echo "Email: " . $email . "<br>";
    echo "Password: " . $password . "<br>";
} else {
    echo "Invalid request method.";
}
?>
