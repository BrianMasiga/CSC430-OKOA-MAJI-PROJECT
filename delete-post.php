<?php

// Define database connection constants
define('DB_HOST', 'localhost');
define('DB_USERNAME', 'admin');
define('DB_PASSWORD', 'admin1234');
define('DB_NAME', 'okoamaji');

// Connect to the database
$conn = mysqli_connect(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_NAME);

if (!$conn) {
  die('Connection failed: ' . mysqli_connect_error());
}

// Set response headers
header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');

if ($_SERVER['REQUEST_METHOD'] === 'DELETE') {
  // Delete an existing post
  $id = $_GET['id'];
  
  $sql = "DELETE FROM community_posts WHERE id = $id";
  $result = mysqli_query($conn, $sql);
  
  if (!$result) {
    http_response_code(404);
    die(mysqli_error($conn));
  }
  
  echo json_encode(array('message' => 'Post deleted successfully.'));
} else {
  http_response_code(405);
  die('Invalid request method.');
}

mysqli_close($conn);

?>
