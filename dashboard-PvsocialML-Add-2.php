<?php session_start(); ?>

<?php

include "conn.php";

// Bind parameters (assuming appropriate data types)
$uId = $_POST['uId'];  

$platform = $_POST['platform'];  
$link = $_POST['link'];  
$logo = $_POST['logo'];  
$status="show";

 date_default_timezone_set("Asia/Kolkata");    
$timeOfUpload = date("d-M-Y h:i:s:a"); 



// SQL insert query with prepared statement
$sql = "INSERT INTO `pvsocial` (`uId`, `platform`, `link`, `logo`, `status`, `timeOfUpload`)  VALUES (?, ?, ?, ?, ?, ?)";

$stmt = $conn->prepare($sql);

// Bind parameters
$stmt->bind_param("isssss",$uId, $platform, $link,  $logo, $status, $timeOfUpload);


// Execute statement
if ($stmt->execute()) {
    echo "<script>
        if (confirm('Social contact added successfully, do you want add more Social contact ?')) {
            window.location.href = 'dashboard-PvsocialML-Add.php?uId=$uId';
        }else{
            window.location.href = 'dashboard-P-View.php?uId=$uId';            
        }
    </script>";
        // header("Location:dashboard-SocialML.php?msg=apd2sml");

} else {
    echo "Error: " . $stmt->error;
}

// Close statement and connection
$stmt->close();
$conn->close();


?>
