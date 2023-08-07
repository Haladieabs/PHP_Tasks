<?php
$cookie_name = "user";
$cookie_value = "John Doe";
$expiry_time = time() + (86400 * 30); // 30 days from now
$cookie_path = "/";
$domain = ""; // Your domain if applicable
$secure = false; // Change to true if using HTTPS
$httponly = true;

setcookie($cookie_name, $cookie_value, $expiry_time, $cookie_path, $domain, $secure, $httponly);
?>
<?php
if (isset($_COOKIE)) {
    foreach ($_COOKIE as $name => $value) {
        echo "$name: $value<br>";
    }
}
?>
