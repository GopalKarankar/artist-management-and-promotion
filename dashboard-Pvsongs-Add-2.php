<?php session_start(); ?>


<?php

include "conn.php";

// Bind parameters (assuming appropriate data types)
$uId = $_POST['uId'];  

$vLink = $_POST['vLink'];  


 date_default_timezone_set("Asia/Kolkata");    
$timeOfUpload = date("d-M-Y h:i:s:a"); 



// SQL insert query with prepared statement
$sql = "INSERT INTO `pvsongs` ( `uId`, `vLink`, `timeOfUpload`)  VALUES (?, ?, ?)";

$stmt = $conn->prepare($sql);

// Bind parameters
$stmt->bind_param("iss", $uId, $vLink, $timeOfUpload);


// Execute statement
if ($stmt->execute()) {

    echo "<script>
        if (confirm('Thumbnail added successfully, do you want add more thumbnails ?')) {
            window.location.href = 'dashboard-Pvsongs-Add.php?uId=$uId';
        }else{
            window.location.href = 'dashboard-Pcelebrity-Add.php?uId=$uId';            
        }
    </script>";

    // header("Location:dashboard-Pcelebrity-Add.php?uId=$uId");

} else {
    echo "Error: " . $stmt->error;
}

// Close statement and connection
$stmt->close();
$conn->close();


?>
