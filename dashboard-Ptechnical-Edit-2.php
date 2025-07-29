<?php session_start(); ?>

<?php

include "conn.php";

// Bind parameters (assuming appropriate data types)
$id = $_POST['id']; // Replace with the actual ID
$uId = $_POST['uId']; // Replace with the actual uId

$pDetails = $_POST['pDetails'];  

 date_default_timezone_set("Asia/Kolkata");    
$timeOfUpload = date("d-M-Y h:i:s:a"); 

// SQL statement with placeholders
$sql = "UPDATE `ptechnical` SET  `pDetails`=?, `timeOfUpload`=? WHERE id=?";

// Prepare statement
$stmt = $conn->prepare($sql);


$stmt->bind_param("ssi",  $pDetails, $timeOfUpload, $id);



// Execute the statement
if ($stmt->execute()) {
    // echo "Record updated successfully";
    header("Location:dashboard-P-View.php?msg=apd2ptechnical&id=$id&uId=$uId");
} else {
    echo "Error updating record: " . $stmt->error;
}

// Close statement and connection
$stmt->close();
$conn->close();
?>
