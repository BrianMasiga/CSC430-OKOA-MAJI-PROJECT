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

// prepare the SQL statement for retrieving the user's email and password
$stmt = $conn->prepare("SELECT email, password FROM users WHERE email = ?");

// bind parameters to the statement
$stmt->bind_param("s", $email);

// set the email variable from the form data
$email = $_POST['email'];

// execute the statement
$stmt->execute();

// get the result set
$result = $stmt->get_result();

// check if a user with the email exists and if the password is correct
if ($result->num_rows == 1) {
    $row = $result->fetch_assoc();
    if (password_verify($_POST['password'], $row['password'])) {
        // login successful, redirect to index.php
        header('Location: index.php');
        exit;
    } else {
        // password incorrect, show error message
        echo "<script>alert('Your input is incorrect! Please check and try again');</script>";
        echo "<meta http-equiv='refresh' content='2;url=login.php'>";
    }
} else {
    // user not found, show error message
    echo "<script>alert('Your input is incorrect! Please check and try again');</script>";
    echo "<meta http-equiv='refresh' content='2;url=login.php'>";
}


// close the statement and database connection
$stmt->close();
$conn->close();
?>
