<?php session_start(); ?>

<?php

include "conn.php";




// Bind parameters (assuming appropriate data types)
$id = $_POST['id']; // Replace with the actual ID
$equipName = $_POST['equipName'];  
$equipDescr = $_POST['equipDescr'];  

 date_default_timezone_set("Asia/Kolkata");    
$timeOfUpload = date("d-M-Y h:i:s:a"); 

// SQL statement with placeholders
$sql = "UPDATE studio SET  `equipName`=?, `equipDescr`=?, `timeOfUpload`=? WHERE id=?";

// Prepare statement
$stmt = $conn->prepare($sql);

$stmt->bind_param("sssi",  $equipName, $equipDescr, $timeOfUpload, $id);

// Execute the statement
if ($stmt->execute()) {
    // echo "Record updated successfully";
    header("Location:reserve-Studio.php");
} else {
    echo "Error updating record: " . $stmt->error;
}

// Close statement and connection
$stmt->close();
$conn->close();
?>
