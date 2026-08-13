<?php
include 'db.php';
require 'vendor/autoload.php';

$result = $conn->query("SELECT * FROM menu_items");

$pdf = new TCPDF();

$pdf -> AddPage();

$pdf -> setFont('times', 'B', '12');

$pdf -> cell('0', '10', 'Course Details', '0', '1', 'C');

$html = '
    <table border="1" cellpadding="10" cellspacing="0" style="font-size:18px; text-align:center; background-color: black; width:100%; color:aqua; ">
        <tr>
            <th>ID</th>
            <th>Course Name</th>
            <th>Description</th>
            <th>Image</th>
            <th>User Id</th>
        </tr>
';

while ($row = $result->fetch_assoc()) {
    $html .= '
        <tr>
            <td>'.$row['id'].'</td>
            <td>'.$row['item_name'].'</td>
            <td>'.$row['description'].'</td>
            <td>'.$row['image'].'</td>
            <td>'.$row['user_id'].'</td>
        </tr>
    ';
}
$html .= '
    </table>
';

$pdf -> writeHTML($html, true, false, true, false, true, 'C');

$pdf -> output('food_details.pdf', 'D');
?>