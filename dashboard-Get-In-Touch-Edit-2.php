<?php session_start(); ?>

<?php

include "conn.php";

// Bind parameters (assuming appropriate data types)
$id = $_POST['id']; // Replace with the actual ID
$phone = $_POST['phone'];  
$whatsapp = $_POST['whatsapp'];  
$email = $_POST['email'];  
$address = $_POST['address'];  
$gmap = $_POST['gmap'];  

 date_default_timezone_set("Asia/Kolkata");    
$timeOfUpload = date("d-M-Y h:i:s:a"); 

// SQL statement with placeholders
$sql = "UPDATE `getintouch` SET  `phone`=?, `whatsapp`=?, `email`=?,`address`=?,`gmap`=?, `timeOfSending`=? WHERE id=?";

// Prepare statement
$stmt = $conn->prepare($sql);


$stmt->bind_param("ssssssi",  $phone, $whatsapp, $email, $address, $gmap, $timeOfUpload, $id);



// Execute the statement
if ($stmt->execute()) {
    // echo "Record updated successfully";
    header("Location:dashboard-Get-In-Touch.php?msg=apd2git");
} else {
    echo "Error updating record: " . $stmt->error;
}

// Close statement and connection
$stmt->close();
$conn->close();
?>
