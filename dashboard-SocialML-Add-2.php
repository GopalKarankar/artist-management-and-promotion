<?php session_start(); ?>

<?php

include "conn.php";

// Bind parameters (assuming appropriate data types)
$platform = $_POST['platform'];  
$link = $_POST['link'];  
$logo = $_POST['logo'];  
$status="show";
 date_default_timezone_set("Asia/Kolkata");    
$timeOfUpload = date("d-M-Y h:i:s:a"); 



// SQL insert query with prepared statement
$sql = "INSERT INTO `social` (`platform`, `link`, `logo`, `status`, `timeOfUpload`)  VALUES (?, ?, ?, ?, ?)";

$stmt = $conn->prepare($sql);

// Bind parameters
$stmt->bind_param("sssss",$platform, $link,  $logo, $status, $timeOfUpload);


// Execute statement
if ($stmt->execute()) {
    // echo "New record inserted successfully.";
        header("Location:dashboard-SocialML.php?msg=apd2sml");

} else {
    echo "Error: " . $stmt->error;
}

// Close statement and connection
$stmt->close();
$conn->close();


?>
