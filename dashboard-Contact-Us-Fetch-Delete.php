<?php session_start(); ?>

<?php
                include "conn.php";

if ($conn->connect_error) {
    echo json_encode(["message" => "Connection failed"]);
    exit;
}

$id = $_POST['id'];

$stmt = $conn->prepare("DELETE FROM contactus WHERE id = ?");
$stmt->bind_param("i", $id);
$stmt->execute();

echo json_encode(["message" => "Deleted successfully"]);
