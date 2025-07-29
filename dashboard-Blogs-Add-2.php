<?php session_start(); ?>

<?php

include "conn.php";

// Bind parameters (assuming appropriate data types)
$bTitle = $_POST['bTitle'];  
$bPost = $_POST['bPost'];  
$bCategory = $_POST['bCategory'];  

$imageName = $_FILES['image']['name'];
$imageType = $_FILES['image']['type'];
$imageType = explode("/", $imageType);
$imageType = end($imageType);
$imageSize = (($_FILES['image']['size'])/1000)." KB"; // Size in bytes
$imageDirectory = $_FILES['image']['tmp_name'];
$target_file = "image/blogs/". basename($imageName);
move_uploaded_file($_FILES['image']['tmp_name'], $target_file);

 date_default_timezone_set("Asia/Kolkata");    
$timeOfUpload = date("d-M-Y h:i:s:a"); 



// SQL insert query with prepared statement
$sql = "INSERT INTO `blogs` (`imageName`, `imageType`, `imageSize`, `imageDirectory`, `bTitle`, `bPost`, `bCategory`, `timeOfUpload`)  VALUES (?, ?, ?, ?, ?, ?, ?, ?)";

$stmt = $conn->prepare($sql);

// Bind parameters
$stmt->bind_param("ssssssss", $imageName, $imageType, $imageSize, $target_file, $bTitle, $bPost, $bCategory, $timeOfUpload);


// Execute statement
if ($stmt->execute()) {
    // echo "New record inserted successfully.";
        // header("Location:dashboard-Blogs.php?msg=apd2blgs");
        header("Location:blogs.php");

} else {
    echo "Error: " . $stmt->error;
}

// Close statement and connection
$stmt->close();
$conn->close();


?>
