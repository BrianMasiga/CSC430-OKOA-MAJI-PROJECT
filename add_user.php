<?php
// Define database connection variables
$host = "localhost"; // Or your database server name
$username = "admin"; // Replace with your MySQL username
$password = "admin123"; // Replace with your MySQL password
$dbname = "okoamajidb"; // Replace with your database name

// Create a new database connection
$conn = mysqli_connect($host, $username, $password, $dbname);

// Check the database connection
if (!$conn) {
  die("Database connection failed: " . mysqli_connect_error());
}

// Get the form data from POST request
$name = mysqli_real_escape_string($conn, $_POST['name']);
$email = mysqli_real_escape_string($conn, $_POST['email']);
$password = mysqli_real_escape_string($conn, $_POST['password']);

// Prepare an SQL statement to insert data into the table
$sql = "INSERT INTO users (name, email, password) VALUES ('$name', '$email', '$password')";

// Execute the SQL statement
if (mysqli_query($conn, $sql)) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

// Close the database connection
mysqli_close($conn);
?>