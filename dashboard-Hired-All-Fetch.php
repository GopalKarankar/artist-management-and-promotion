<?php session_start(); ?>

<?php
                include "conn.php";


if ($conn->connect_error) {
    http_response_code(500);
    echo json_encode(["error" => "Connection failed: " . $conn->connect_error]);
    exit;
}

$sql = "SELECT id, fullName, senderEmail, phNumber, artist, details, status, timeOfUpload    FROM hired";

$stmt = $conn->prepare($sql);
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
