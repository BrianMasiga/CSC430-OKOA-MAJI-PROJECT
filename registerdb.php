<?php
// establish a database connection
$servername = "localhost";
$username = "admin";
$password = "admin1234";
$dbname = "okoamaji";

$conn = new mysqli($servername, $username, $password, $dbname);

// check if the connection is successful
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// check if a user with the same email already exists
$stmt = $conn->prepare("SELECT email FROM users WHERE email = ?");
$stmt->bind_param("s", $email);
$email = $_POST['email'];
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {
    echo "User with email already exists";
    exit();
}

// prepare the SQL statement for inserting form data into the users table
$stmt = $conn->prepare("INSERT INTO users (first_name, last_name, email, password) VALUES (?, ?, ?, ?)");

// bind parameters to the statement
$stmt->bind_param("ssss", $first_name, $last_name, $email, $password);

// set variables for the form data
$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$email = $_POST['email'];
$password = password_hash($_POST['password'], PASSWORD_DEFAULT); // hash the password for security

// execute the statement
if ($stmt->execute()) {
    // redirect to login page
    header("Location: login.php");
    exit();
} else {
    echo "Error: " . $stmt->error;
}

// close the statement and database connection
$stmt->close();
$conn->close();
?>
