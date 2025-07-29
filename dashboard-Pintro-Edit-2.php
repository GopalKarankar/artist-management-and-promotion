<?php session_start(); ?>

<?php

include "conn.php";

if (!isset($_FILES["image"]) || $_FILES["image"]["error"] == UPLOAD_ERR_NO_FILE) {

            // SQL statement with placeholders
            $sql = "UPDATE pintro SET  `sName`=?,  `sQual`=?, `sDetails`=?, `timeOfUpload`=? WHERE uId=?";



            // Prepare statement
            $stmt = $conn->prepare($sql);


            // Bind parameters (assuming appropriate data types)
            $uId = $_POST['uId']; // Replace with the actual uId

            $sName = $_POST['sName'];  
            $sQual = $_POST['sQual'];  
            $sDetails = $_POST['sDetails'];  


             date_default_timezone_set("Asia/Kolkata");    
            $timeOfUpload = date("d-M-Y h:i:s:a"); 


            $stmt->bind_param("ssssi", $sName, $sQual, $sDetails, $timeOfUpload, $uId);


            // Execute the statement
            if ($stmt->execute()) {
                // echo "Record updated successfully";
                header("Location:dashboard-P-View.php?msg=apd2pintro&uId=$uId");
            } else {
                echo "Error updating record: " . $stmt->error;
            }


} else {

            // SQL statement with placeholders
            $sql = "UPDATE pintro SET `imageName`=?, `imageType`=?, `imageSize`=?, `imageDirectory`=?, `sName`=?,  `sQual`=?, `sDetails`=?, `timeOfUpload`=? WHERE uId=?";



            // Prepare statement
            $stmt = $conn->prepare($sql);


            // Bind parameters (assuming appropriate data types)
            $uId = $_POST['uId']; // Replace with the actual uId

            $sName = $_POST['sName'];  
            $sQual = $_POST['sQual'];  
            $sDetails = $_POST['sDetails'];  

            $imageName = $_FILES['image']['name'];
            $imageType = $_FILES['image']['type'];
            $imageType = explode("/", $imageType);
            $imageType = end($imageType);
            $imageSize = (($_FILES['image']['size'])/1000)." KB"; // Size in bytes
            $imageDirectory = $_FILES['image']['tmp_name'];
            $old_directory=$_POST['directory'];
             
            $target_file = "image/pintro/". basename($imageName);
            move_uploaded_file($_FILES['image']['tmp_name'], $target_file);

             date_default_timezone_set("Asia/Kolkata");    
            $timeOfUpload = date("d-M-Y h:i:s:a"); 


            $stmt->bind_param("ssssssssi",  $imageName, $imageType, $imageSize, $target_file, $sName,  $sQual, $sDetails, $timeOfUpload, $uId);

                unlink($old_directory);

            // Execute the statement
            if ($stmt->execute()) {
                // echo "Record updated successfully";
                header("Location:dashboard-P-View.php?msg=apd2pintro&uId=$uId");
            } else {
                echo "Error updating record: " . $stmt->error;
            }
} 


// Close statement and connection
$stmt->close();
$conn->close();
?>
