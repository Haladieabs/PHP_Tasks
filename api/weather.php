<!DOCTYPE html>
<html>
<head>
    <title>Weather Forecast</title>
</head>
<body>
    <h1>Weather Forecast</h1>
    
    <form method="POST">
        <label for="city">Enter City Name: </label>
        <input type="text" name="city" id="city" required>
        <button type="submit">Get Weather</button>
    </form>
    
    <?php
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        $apiKey = "1d8998178fd29fe1bfb477d0643124b4"; // Replace with your actual API key
        $city = urlencode($_POST["city"]);
        $url = "http://api.openweathermap.org/data/2.5/weather?q=$city&units=metric&appid=1d8998178fd29fe1bfb477d0643124b4";
        
        $response = file_get_contents($url);
        
        if ($response !== false) {
            $data = json_decode($response, true);
            
            if ($data) {
                $cityName = $data["name"];
                $temperature = $data["main"]["temp"];
                $humidity = $data["main"]["humidity"];
                $minTemp = $data["main"]["temp_min"];
                $maxTemp = $data["main"]["temp_max"];
                $windSpeed = $data["wind"]["speed"];
                
                // Database Connection
                $servername = "localhost";
                $username = "root";
                $password = "";
                $dbname = "test";
                
                $conn = new mysqli($servername, $username, $password, $dbname);
                
                if ($conn->connect_error) {
                    die("Connection failed: " . $conn->connect_error);
                }
                
                // Insert Weather Data into Database
                $sql = "INSERT INTO weather (city, temperature, humidity, min_temperature, max_temperature, wind_speed)
                        VALUES ('$cityName', '$temperature', '$humidity', '$minTemp', '$maxTemp', '$windSpeed')";
                
                if ($conn->query($sql) === TRUE) {
                    echo "<p>Data inserted into database successfully.</p>";
                } else {
                    echo "<p>Error: " . $sql . "<br>" . $conn->error . "</p>";
                }
                
                $conn->close();
                
                // Display Weather Data
                echo "<h2>Weather in $cityName</h2>";
                echo "<p>Temperature: $temperature</p>";
                echo "<p>Humidity: $humidity%</p>";
                echo "<p>Min Temperature: $minTemp</p>";
                echo "<p>Max Temperature: $maxTemp</p>";
                echo "<p>Wind Speed: $windSpeed m/s</p>";
            } else {
                echo "<p>Error decoding JSON response.</p>";
            }
        } else {
            echo "<p>Error fetching weather data from API. Check your API key and server configuration.</p>";
        }
    }
    ?>
</body>
</html>
