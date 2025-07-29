<?php session_start(); ?>

<?php

include "conn.php";

// Bind parameters (assuming appropriate data types)
$uId = $_POST['uId'];  
$reqName = $_POST['reqName'];  
$reqDescr = $_POST['reqDescr'];  

 date_default_timezone_set("Asia/Kolkata");    
$timeOfUpload = date("d-M-Y h:i:s:a"); 



// SQL insert query with prepared statement
$sql = "INSERT INTO `phospi` (`reqName`, `reqDescr`, `timeOfUpload`)  VALUES (?, ?, ?)";

$stmt = $conn->prepare($sql);

// Bind parameters
$stmt->bind_param("sss",$reqName, $reqDescr,  $timeOfUpload);


// Execute statement
if ($stmt->execute()) {
    // echo "New record inserted successfully.";
        header("Location:dashboard-P-View.php?uId=$uId");

} else {
    echo "Error: " . $stmt->error;
}

// Close statement and connection
$stmt->close();
$conn->close();


?>
