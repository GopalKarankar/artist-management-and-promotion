<?php session_start(); ?>

<?php

include "conn.php";

// Bind parameters (assuming appropriate data types)

$uId=$_POST['uId'];
$platform=$_POST['platform'];
$pLink=$_POST['pLink'];

$imageName = $_FILES['image']['name'];
$imageType = $_FILES['image']['type'];
$imageType = explode("/", $imageType);
$imageType = end($imageType);
$imageSize = (($_FILES['image']['size'])/1000)." KB"; // Size in bytes
$imageDirectory = $_FILES['image']['tmp_name'];
$target_file = "image/screenshots/". basename($imageName);
move_uploaded_file($_FILES['image']['tmp_name'], $target_file);

 date_default_timezone_set("Asia/Kolkata");    
$timeOfUpload = date("d-M-Y h:i:s:a"); 


// SQL insert query with prepared statement
$sql = "INSERT INTO `pdighandles` (`uId`, `platform`, `pLink`, `imageName`, `imageType`, `imageSize`, `imageDirectory`, `timeOfUpload`)  VALUES (?, ?, ?, ?, ?, ?, ?, ?)";

$stmt = $conn->prepare($sql);

// Bind parameters
$stmt->bind_param("isssssss", $uId, $platform, $pLink,  $imageName, $imageType, $imageSize, $target_file, $timeOfUpload);


// Execute statement
if ($stmt->execute()) {
    echo "<script>
        if (confirm('Thumbnail added successfully, do you want add more thumbnails ?')) {
            window.location.href = 'dashboard-Pdighandles-Add.php?uId=$uId';
        }else{
            window.location.href = 'dashboard-PvsocialML-Add.php?uId=$uId';            
        }
    </script>";
        // header("Location:dashboard-Pdighandles.php?uId=$uId");

} else {
    echo "Error: " . $stmt->error;
}

// Close statement and connection
$stmt->close();
$conn->close();


?>
