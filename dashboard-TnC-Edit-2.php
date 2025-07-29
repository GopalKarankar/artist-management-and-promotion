<?php session_start(); ?>

<?php

include "conn.php";

// Bind parameters (assuming appropriate data types)
$id = $_POST['id']; // Replace with the actual ID
$tnc = $_POST['tnc'];  

 date_default_timezone_set("Asia/Kolkata");    
$timeOfUpload = date("d-M-Y h:i:s:a"); 

// SQL statement with placeholders
$sql = "UPDATE `tnc` SET  `tnc`=?, `timeOfUpload`=? WHERE id=?";

// Prepare statement
$stmt = $conn->prepare($sql);


$stmt->bind_param("ssi",  $tnc, $timeOfUpload, $id);



// Execute the statement
if ($stmt->execute()) {
    // echo "Record updated successfully";
    header("Location:terms-Conditions.php");
} else {
    echo "Error updating record: " . $stmt->error;
}

// Close statement and connection
$stmt->close();
$conn->close();
?>
