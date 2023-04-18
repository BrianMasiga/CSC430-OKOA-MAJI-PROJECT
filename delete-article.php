<?php
$servername = "localhost";
$username = "admin";
$password = "admin1234";
$dbname = "okoamaji";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// Get article_id from form data
$article_id = isset($_POST["article_id"]) ? $_POST["article_id"] : null;

// Validate form data
if (!$article_id) {
  die("Invalid article ID");
}

// Prepare and bind SQL statement to delete article
$stmt = $conn->prepare("DELETE FROM articles WHERE article_id = ?");
$stmt->bind_param("i", $article_id);

// Execute SQL statement to delete article
if ($stmt->execute() === TRUE) {
  // Redirect back to articles page
  header("Location: articles.php");
  exit;
} else {
  echo "Error deleting article: " . $stmt->error;
}

// Close connection
$stmt->close();
$conn->close();
?>
