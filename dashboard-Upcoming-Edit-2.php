<?php session_start(); ?>

<?php

include "conn.php";

// Bind parameters (assuming appropriate data types)
$id = $_POST['id']; // Replace with the actual ID
$address = $_POST['address'];  
$eventDate = $_POST['eventDate'];  

$eventTime = $_POST['eventTime'];  
$eventTime = date("h:i A", strtotime($eventTime));

 date_default_timezone_set("Asia/Kolkata");    
$timeOfUpload = date("d-M-Y h:i:s:a"); 

// SQL statement with placeholders
$sql = "UPDATE upcoming SET  `address`=?, `eventDate`=?, `eventTime`=?, `timeOfUpload`=? WHERE id=?";

// Prepare statement
$stmt = $conn->prepare($sql);

$stmt->bind_param("ssssi",  $address, $eventDate, $eventTime, $timeOfUpload, $id);

// Execute the statement
if ($stmt->execute()) {
    // echo "Record updated successfully";
    header("Location:book-Show.php?msg=apd2upcg");
} else {
    echo "Error updating record: " . $stmt->error;
}

// Close statement and connection
$stmt->close();
$conn->close();
?>
