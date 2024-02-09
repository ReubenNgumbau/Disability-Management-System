<?php
include'connection.php';

// SQL queries to count entries within each age range
$ageRanges = [
    '1-15' => "SELECT COUNT(*) AS count FROM disabled WHERE age BETWEEN 1 AND 15",
    '16-25' => "SELECT COUNT(*) AS count FROM disabled WHERE age BETWEEN 16 AND 25",
    '26-50' => "SELECT COUNT(*) AS count FROM disabled WHERE age BETWEEN 26 AND 50",
    'Above 50' => "SELECT COUNT(*) AS count FROM disabled WHERE age > 50"
];

$maxCount = 0;
$popularRange = '';

foreach ($ageRanges as $range => $sql) {
    $result = $conn->query($sql);
    if ($row = $result->fetch_assoc()) {
        if ($row['count'] > $maxCount) {
            $maxCount = $row['count'];
            $popularRange = $range;
        }
    }
}

echo $popularRange;

$conn->close();
?>
