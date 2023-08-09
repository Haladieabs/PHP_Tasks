<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST">
    <label >firstname:</label><input type="text" name="x"><br>
    <label >lastname:</label><input type="text" name="y"><br>
    >
    <input type="submit" name="submit">

<?php
require("conn.php");
$f_name=$_POST['x'];
$l_name=$_POST['y'];
$sql="INSERT INTO information(firstname,lastname) VALUES ('$f_name','$l_name')";
if ($conn->query($sql)===true) {
    echo "new record ";

}
else {
    echo"error";
}
$conn ->close();
?>
</body>
</html>

