<?php
include 'db_connection.php'; // Include database connection

$sql = "SELECT * FROM sers";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "User: " . $row["full_name"] . " - Email: " . $row["email"] . "<br>";
    }
} else {
    echo "No users found.";
}

$conn->close();
?>
