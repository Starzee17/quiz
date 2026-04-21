<?php
include '../config/config.php';
header('Content-Type: application/json');

$sql = "SELECT * FROM questions ORDER BY id";
$result = $conn->query($sql);

$questions = [];
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $questions[] = [
            'id'       => (int)$row['id'],
            'question' => $row['question'],
            'options'  => [
                'A' => $row['option_a'],
                'B' => $row['option_b'],
                'C' => $row['option_c'],
                'D' => $row['option_d']
            ],
            'correct'  => $row['correct_option']
        ];
    }
}

echo json_encode($questions);
$conn->close();
?>