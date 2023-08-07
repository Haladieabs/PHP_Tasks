<!DOCTYPE html>
<html>
<head>
    <title>URL Search Engine</title>
</head>
<body>
    <form action="redirect.php" method="get">
        <label for="url">Enter URL:</label>
        <input type="url" id="url" name="url" required>
        <input type="submit" value="GO">
    </form>
</body>
</html>
<?php
if (isset($_GET["url"])) {
    $url = $_GET["url"];
    header("Location: $url");
    exit;
} else {
    echo "URL not provided.";
}
?>
