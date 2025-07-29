<?php session_start(); ?>

<?php

include "conn.php";

// Bind parameters (assuming appropriate data types)
$uId = $_POST['uId']; // Replace with the actual uId
$bPost = $_POST['bPost'];  

 date_default_timezone_set("Asia/Kolkata");    
$timeOfUpload = date("d-M-Y h:i:s:a"); 

// SQL statement with placeholders
$sql = "UPDATE `pabout` SET  `bPost`=?, `timeOfUpload`=? WHERE uId=?";

// Prepare statement
$stmt = $conn->prepare($sql);


$stmt->bind_param("ssi",  $bPost, $timeOfUpload, $uId);



// Execute the statement
if ($stmt->execute()) {
    // echo "Record updated successfully";
    header("Location:dashboard-P-View.php?msg=apd2pabout&uId=$uId");
} else {
    echo "Error updating record: " . $stmt->error;
}

// Close statement and connection
$stmt->close();
$conn->close();

?>
