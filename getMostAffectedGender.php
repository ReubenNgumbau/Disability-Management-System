<?php
include'connection.php';

// SQL to get the most affected gender
$sql = "SELECT gender, COUNT(*) AS gender_count FROM disabled GROUP BY gender ORDER BY gender_count DESC LIMIT 1";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Output data of the row with the most affected gender
    $row = $result->fetch_assoc();
    echo $row["gender"];
} else {
    echo "No data available";
}

$conn->close();
?>
