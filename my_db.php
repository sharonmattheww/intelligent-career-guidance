<?php
include 'config.php';

// SQL to create table
$sql_create = "CREATE TABLE IF NOT EXISTS Sers (
    user_id INT PRIMARY KEY AUTO_INCREMENT,
    full_name VARCHAR(100) NOT NULL,
    email VARCHAR(100) UNIQUE NOT NULL,
    password_hash VARCHAR(255) NOT NULL,
    phone VARCHAR(20),
    age INT,
    education VARCHAR(100),
    experience VARCHAR(100),
    interests TEXT,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
)";

// Execute the create table query
if (mysqli_query($link, $sql_create)) {
    echo "Table Sers created successfully.";
} else {
    echo "ERROR: Could not execute $sql_create. " . mysqli_error($link);
}

// Close connection
mysqli_close($link);
?>