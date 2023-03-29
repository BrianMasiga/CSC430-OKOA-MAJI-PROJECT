<?php
// Connect to the database
$servername = "localhost";
$username = "admin";
$password = "admin1234";
$dbname = "okoamaji";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// Delete all records from the table
$sql = "DELETE FROM water_usage";
if ($conn->query($sql) === TRUE) {
  echo "YOUR DATA HAS BEEN DELETED";

  // Redirect back to recordings.php after half a second
  header("refresh:0.00001;url=readings.php");
} else {
  echo "Error clearing records: " . $conn->error;
}

// Close the database connection
$conn->close();
?>
