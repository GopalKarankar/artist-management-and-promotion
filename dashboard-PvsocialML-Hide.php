<?php session_start(); ?>

<?php

include "conn.php";

// Bind parameters (assuming appropriate data types)
$id = $_GET['id']; // Replace with the actual ID
$status = "hide";  

 date_default_timezone_set("Asia/Kolkata");    
$timeOfUpload = date("d-M-Y h:i:s:a"); 

// SQL statement with placeholders
$sql = "UPDATE social SET  `status`=?, `timeOfUpload`=? WHERE id=?";

// Prepare statement
$stmt = $conn->prepare($sql);

$stmt->bind_param("ssi",  $status, $timeOfUpload, $id);

// Execute the statement
if ($stmt->execute()) {
    // echo "Record updated successfully";
    header("Location:dashboard-SocialML.php?msg=apd2sml");
} else {
    echo "Error updating record: " . $stmt->error;
}

// Close statement and connection
$stmt->close();
$conn->close();
?>
