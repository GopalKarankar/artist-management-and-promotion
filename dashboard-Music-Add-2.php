<?php session_start(); ?>

<?php

include "conn.php";

// Bind parameters (assuming appropriate data types)
$category = $_POST['category'];  

$iframe = $_POST['iframe'];  
$sTitle = $_POST['sTitle'];  
$sArtist = $_POST['sArtist'];  

$imageName = $_FILES['image']['name'];
$imageType = $_FILES['image']['type'];
$imageType = explode("/", $imageType);
$imageType = end($imageType);
$imageSize = (($_FILES['image']['size'])/1000)." KB"; // Size in bytes
$imageDirectory = $_FILES['image']['tmp_name'];
$target_file = "image/music/". basename($imageName);
move_uploaded_file($_FILES['image']['tmp_name'], $target_file);

 date_default_timezone_set("Asia/Kolkata");    
$timeOfUpload = date("d-M-Y h:i:s:a"); 



// SQL insert query with prepared statement
$sql = "INSERT INTO `music` (`imageName`, `imageType`, `imageSize`, `imageDirectory`, `iframe`, `sTitle`, `sArtist`, `category`, `timeOfUpload`)  VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)";

$stmt = $conn->prepare($sql);

// Bind parameters
$stmt->bind_param("sssssssss", $imageName, $imageType, $imageSize, $target_file, $iframe, $sTitle, $sArtist, $category, $timeOfUpload);


// Execute statement
if ($stmt->execute()) {
    // echo "New record inserted successfully.";
        // header("Location:dashboard-Music.php?msg=apd2ml");
        header("Location:dashboard-Music.php?msg=apd2l");

} else {
    echo "Error: " . $stmt->error;
}

// Close statement and connection
$stmt->close();
$conn->close();


?>
