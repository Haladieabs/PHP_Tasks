<!DOCTYPE html>
<html>
<head>
    <title>Pokémon Search</title>
    <style>
        .pokemon-card {
            border: 1px solid #ccc;
            padding: 10px;
            margin: 10px;
            display: inline-block;
            width: 300px;
            text-align: center;
        }

        .pokemon-card img {
            max-width: 100px;
        }
    </style>
</head>
<body>
    <h1>Pokémon Search</h1>
    
    <form method="GET">
        <label for="pokemon">Enter Pokémon Name or ID: </label>
        <input type="text" name="pokemon" id="pokemon" required>
        <button type="submit">Search</button>
    </form>
    
    <?php
    if (isset($_GET['pokemon'])) {
        $pokemonName = $_GET['pokemon'];

        $url = "https://pokeapi.co/api/v2/pokemon/$pokemonName";

        $response = file_get_contents($url);

        if ($response !== false) {
            $data = json_decode($response, true);
            
            if ($data) {
                $pokemonName = ucfirst($data["name"]);
                $pokemonImageUrl = $data["sprites"]["front_default"];
                $pokemonAbilities = $data["abilities"];
                
                // Database Connection
                $servername = "localhost";
                $username_db = "root";
                $password_db = "";
                $dbname = "test";
                
                $conn = new mysqli($servername, $username_db, $password_db, $dbname);
                
                if ($conn->connect_error) {
                    die("Connection failed: " . $conn->connect_error);
                }
                
                // Process Abilities for Database
                $abilitiesString = implode(", ", array_map(function ($ability) {
                    return ucfirst($ability["ability"]["name"]);
                }, $pokemonAbilities));

                // Insert Pokémon Data into Database
                $timestamp = date("Y-m-d H:i:s");
                $sql = "INSERT INTO pokemon (name, abilities, search_timestamp)
                        VALUES ('$pokemonName', '$abilitiesString', '$timestamp')";
                
                if ($conn->query($sql) === TRUE) {
                    echo "<p>Pokémon data inserted into database successfully.</p>";
                } else {
                    echo "<p>Error: " . $sql . "<br>" . $conn->error . "</p>";
                }
                
                $conn->close();
                
                // Display Pokémon Data
                echo "<div class='pokemon-card'>";
                echo "<img src='$pokemonImageUrl' alt='$pokemonName'>";
                echo "<h3>$pokemonName</h3>";
                echo "<p><strong>Abilities:</strong> $abilitiesString</p>";
                echo "</div>";
            } else {
                echo "<p>Error decoding JSON response.</p>";
            }
        } else {
            echo "<p>Error fetching Pokémon data from API. Check your server configuration.</p>";
        }
    }
    ?>
</body>
</html>
