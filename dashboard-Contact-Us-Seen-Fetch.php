<?php session_start(); ?>

<?php
                include "conn.php";


$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
    http_response_code(500);
    echo json_encode(["error" => "Connection failed: " . $conn->connect_error]);
    exit;
}

// SQL with WHERE clause and placeholder
$sql = "SELECT *
        FROM contactus 
        WHERE status = ?";

$stmt = $conn->prepare($sql);

$status = 'Seen';
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
