<?php session_start(); ?>

<?php

include "conn.php";




// Bind parameters (assuming appropriate data types)
$uId = $_POST['uId']; // Replace with the actual ID
$id = $_POST['id']; // Replace with the actual ID
$reqName = $_POST['reqName'];  
$reqDescr = $_POST['reqDescr'];  

 date_default_timezone_set("Asia/Kolkata");    
$timeOfUpload = date("d-M-Y h:i:s:a"); 

// SQL statement with placeholders
$sql = "UPDATE phospi SET  `reqName`=?, `reqDescr`=?, `timeOfUpload`=? WHERE id=?";

// Prepare statement
$stmt = $conn->prepare($sql);

$stmt->bind_param("sssi",  $reqName, $reqDescr, $timeOfUpload, $id);

// Execute the statement
if ($stmt->execute()) {
    // echo "Record updated successfully";
    header("Location:dashboard-P-View.php?uId=$uId");
} else {
    echo "Error updating record: " . $stmt->error;
}

// Close statement and connection
$stmt->close();
$conn->close();
?>
