<?php session_start(); ?>

<?php

include "conn.php";

// Bind parameters (assuming appropriate data types)

$uId= $_POST['uId'];

$pCelebName = $_POST['pCelebName'];  

$imageName = $_FILES['image']['name'];
$imageType = $_FILES['image']['type'];
$imageType = explode("/", $imageType);
$imageType = end($imageType);
$imageSize = (($_FILES['image']['size'])/1000)." KB"; // Size in bytes
$imageDirectory = $_FILES['image']['tmp_name'];
$target_file = "image/celebs/". basename($imageName);
move_uploaded_file($_FILES['image']['tmp_name'], $target_file);

 date_default_timezone_set("Asia/Kolkata");    
$timeOfUpload = date("d-M-Y h:i:s:a"); 



// SQL insert query with prepared statement
$sql = "INSERT INTO `pcelebrity` (`uId`, `imageName`, `imageType`, `imageSize`, `imageDirectory`, `pCelebName`, `timeOfUpload`)  VALUES (?, ?, ?, ?, ?, ?, ?)";

$stmt = $conn->prepare($sql);

// Bind parameters
$stmt->bind_param("issssss", $uId, $imageName, $imageType, $imageSize, $target_file, $pCelebName, $timeOfUpload);


// Execute statement
if ($stmt->execute()) {
    echo "<script>
        if (confirm('celebrility added successfully, do you want add more celebrilities ?')) {
            window.location.href = 'dashboard-Pcelebrity-Add.php?uId=$uId';
        }else{
            window.location.href = 'dashboard-Ptechnical-Add.php?uId=$uId';            
        }
    </script>";

} else {
    echo "Error: " . $stmt->error;
}

// Close statement and connection
$stmt->close();
$conn->close();


?>
