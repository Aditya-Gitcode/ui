<?php
include 'db.php';

header('Content-Type: text/csv');
header('Content-Disposition: attachment; filename="data.csv"');

$output = fopen('php://output', 'w');

fputcsv($output, array('ID', 'Name', 'Descripiton', 'Price'));

$result = $conn->query("SELECT * FROM users");

while ($row = $result->fetch_assoc()) {
    fputcsv($output, $row);
}

fclose($output);
?>