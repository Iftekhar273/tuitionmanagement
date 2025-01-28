<?php
include 'db_config.php';

if ($_SERVER['REQUEST_METHOD'] == 'GET') {
    $student_id = $_GET['student_id'];

    $sql = "SELECT * FROM fees WHERE student_id='$student_id'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $data = $result->fetch_all(MYSQLI_ASSOC);
        echo json_encode($data);
    } else {
        echo "No data found!";
    }
}
?>
