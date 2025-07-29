<?php session_start(); ?>

<?php

include "conn.php";




// Bind parameters (assuming appropriate data types)
$id = $_POST['id']; // Replace with the actual ID
$uId = $_POST['uId']; // Replace with the actual uId

$platform = $_POST['platform'];  
$logo = $_POST['logo'];  
$link = $_POST['link'];  

 date_default_timezone_set("Asia/Kolkata");    
$timeOfUpload = date("d-M-Y h:i:s:a"); 

// SQL statement with placeholders
$sql = "UPDATE pvsocial SET  `platform`=?, `logo`=?, `link`=?, `timeOfUpload`=? WHERE id=?";

// Prepare statement
$stmt = $conn->prepare($sql);

$stmt->bind_param("ssssi",  $platform, $logo, $link, $timeOfUpload, $id);

// Execute the statement
if ($stmt->execute()) {
    // echo "Record updated successfully";
    header("Location:dashboard-P-View.php?msg=apd2sml&id=$id&uId=$uId");
} else {
    echo "Error updating record: " . $stmt->error;
}

// Close statement and connection
$stmt->close();
$conn->close();
?>
