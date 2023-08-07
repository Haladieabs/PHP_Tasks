<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "test";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// prepare and bind
$stmt = $conn->prepare("INSERT INTO MyGuests (firstname, lastname, email) VALUES (?, ?, ?)");
$stmt->bind_param("sss", $firstname, $lastname, $email);

// set parameters and execute
$firstname = "John";
$lastname = "Doe";
$email = "john@example.com";
$stmt->execute();

$firstname = "Mary";
$lastname = "Moe";
$email = "mary@example.com";
$stmt->execute();

$firstname = "Julie";
$lastname = "Dooley";
$email = "julie@example.com";
$stmt->execute();

echo "New records created successfully";

$stmt->close();
$conn->close();
?>


<!-- // // insert transaction

// START TRANSACTION;


// INSERT INTO MyGuests (firstname, lastname, email) VALUES ('John ','Doe',"john@example.com" );


// INSERT INTO MyGuests (firstname, lastname, email) VALUES ('Jane',' Smith', "john@example.com");

// -- Commit the transaction if both inserts succeed
// COMMIT;



// // delete transaction

// -- Start a transaction
// START TRANSACTION;

// -- Attempt to delete records
// DELETE FROM MyGuests WHERE id=1;

// -- Check for errors
// IF @@ERROR <> 0 THEN
//     -- Roll back the transaction if an error occurs
//     ROLLBACK;
// ELSE
//     -- Commit the transaction if the delete operation is successful
//     COMMIT;
// END IF; -->


