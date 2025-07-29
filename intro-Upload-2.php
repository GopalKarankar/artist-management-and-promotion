<?php session_start(); ?>

<?php

include 'conn.php';



$name = $_POST['name'];
$role = $_POST['role'];
$details = $_POST['details'];

date_default_timezone_set("Asia/Kolkata");
$uploadTime=date("d-M-Y h:i:s:a");
// $updateTime = date("d-M-Y h:i:s:a");

$imageName = $_FILES['image']['name'];
$imageType = $_FILES['image']['type'];
$imageType = explode("/", $imageType);
$imageType = end($imageType);
$imageSize = (($_FILES['image']['size'])/1000)." KB"; // Size in bytes
$imageDirectory = $_FILES['image']['tmp_name'];
 
$target_file = "image/members/". basename($imageName);
move_uploaded_file($_FILES['image']['tmp_name'], $target_file);

// SQL insert query with prepared statement
$sql = "INSERT INTO `intro` (`imageName`, `imageType`, `imageSize`, `imageDirectory`, `name`, `role`, `details`, `uploadTime`)  VALUES (?, ?, ?, ?, ?, ?, ?, ?)";

$stmt = $conn->prepare($sql);

// Bind parameters
$stmt->bind_param("ssssssss", $imageName, $imageType, $imageSize, $target_file, $name, $role, $details, $uploadTime);


// Execute statement
if ($stmt->execute()) {
    echo "New record inserted successfully.";
} else {
    echo "Error: " . $stmt->error;
}

// Close statement and connection
$stmt->close();
$conn->close();
?>
