<?php
include'connection.php';

// SQL to count unique counties
$sql = "SELECT COUNT(DISTINCT county) AS unique_counties FROM disabled";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo $row["unique_counties"];
    }
} else {
    echo "0";
}

$conn->close();
?>
