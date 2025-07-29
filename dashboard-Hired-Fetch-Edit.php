<?php session_start(); ?>

<?php
                include "conn.php";

if ($conn->connect_error) {
    echo json_encode(["message" => "Connection failed"]);
    exit;
}

$id = $_POST['id'];
$name = $_POST['name'];
$email = $_POST['email'];
$name = $_POST['name'];
$email = $_POST['email'];
$name = $_POST['name'];
$email = $_POST['email'];

$stmt = $conn->prepare("UPDATE hired SET name = ?, email = ? WHERE id = ?");
$stmt->bind_param("ssi", $name, $email, $id);
$stmt->execute();

echo json_encode(["message" => "User updated successfully"]);
