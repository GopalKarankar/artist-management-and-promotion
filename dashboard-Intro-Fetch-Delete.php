<?php session_start(); ?>

<?php
                include "conn.php";

if ($conn->connect_error) {
    echo json_encode(["message" => "Connection failed"]);
    exit;
}

$id = $_POST['id'];
    $old_directory = $_POST['imageDirectory'];
    unlink($old_directory);

$stmt = $conn->prepare("DELETE FROM intro WHERE id = ?");
$stmt->bind_param("i", $id);
$stmt->execute();

echo json_encode(["message" => "Deleted successfully"]);
