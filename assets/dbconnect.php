<?php
    // Connect to the database
    $servername = "localhost";
    $username = "admin1@admin.com";
    $password = "database";
    $dbname = "okoa_maji_db";

    
    $conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);
    
    // Check connection
    if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
    }
    
    // Create the water_sources table
    $sql = "CREATE TABLE water_sources (
      id INT(11) NOT NULL AUTO_INCREMENT,
      name VARCHAR(255) NOT NULL,
      location VARCHAR(255),
      capacity FLOAT(10,2),
      PRIMARY KEY (id)
    )";
    
    if (mysqli_query($conn, $sql)) {
      echo "Table water_sources created successfully";
    } else {
      echo "Error creating table: " . mysqli_error($conn);
    }
    
    // Create the water_quality_measurements table
    $sql = "CREATE TABLE water_quality_measurements (
      id INT(11) NOT NULL AUTO_INCREMENT,
      source_id INT(11) NOT NULL,
      date DATE NOT NULL,
      ph FLOAT(10,2),
      chlorine FLOAT(10,2),
      PRIMARY KEY (id),
      FOREIGN KEY (source_id) REFERENCES water_sources(id)
    )";
    
    if (mysqli_query($conn, $sql)) {
      echo "Table water_quality_measurements created successfully";
    } else {
      echo "Error creating table: " . mysqli_error($conn);
    }
    
    // Create the water_usage table
    $sql = "CREATE TABLE water_usage (
      id INT(11) NOT NULL AUTO_INCREMENT,
      source_id INT(11) NOT NULL,
      date DATE NOT NULL,
      usage FLOAT(10,2),
      PRIMARY KEY (id),
      FOREIGN KEY (source_id) REFERENCES water_sources(id)
    )";
    
    if (mysqli_query($conn, $sql)) {
      echo "Table water_usage created successfully";
    } else {
      echo "Error creating table: " . mysqli_error($conn);
    }
    
    // Close the connection
    mysqli_close($conn);
    ?>
    
