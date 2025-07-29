<?php session_start(); ?>

<?php
                include "conn.php";


if ($conn->connect_error) {
    http_response_code(500);
    echo json_encode(["error" => "Connection failed: " . $conn->connect_error]);
    exit;
}

// SQL with WHERE clause and placeholder
$sql = "SELECT id, fullName, senderEmail, phNumber, eventType, details, status, timeOfUpload 
        FROM bookshow 
        WHERE status = ?";

$stmt = $conn->prepare($sql);

$status = 'Disapproved';
$stmt->bind_param("s", $status); // "s" means the parameter is a string

$stmt->execute();
$result = $stmt->get_result();

$users = [];
while ($row = $result->fetch_assoc()) {
    $users[] = $row;
}

$stmt->close();
$conn->close();

echo json_encode(["data" => $users]);
?>
