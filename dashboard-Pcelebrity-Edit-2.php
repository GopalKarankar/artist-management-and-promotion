<?php session_start(); ?>

<?php

include "conn.php";

if (!isset($_FILES["image"]) || $_FILES["image"]["error"] == UPLOAD_ERR_NO_FILE) {

            // SQL statement with placeholders
            $sql = "UPDATE pcelebrity SET  `pCelebName`=?, `timeOfUpload`=? WHERE id=?";



            // Prepare statement
            $stmt = $conn->prepare($sql);


            // Bind parameters (assuming appropriate data types)
            $id = $_POST['id']; // Replace with the actual ID
            $uId = $_POST['uId']; // Replace with the actual ID

            $pCelebName = $_POST['pCelebName'];  

             date_default_timezone_set("Asia/Kolkata");    
            $timeOfUpload = date("d-M-Y h:i:s:a"); 


            $stmt->bind_param("ssi",  $pCelebName, $timeOfUpload, $id);


            // Execute the statement
            if ($stmt->execute()) {
                // echo "Record updated successfully";
                header("Location:dashboard-P-View.php?msg=apd2blgs&id=$id&uId=$uId");
            } else {
                echo "Error updating record: " . $stmt->error;
            }


} else {

            // SQL statement with placeholders
            $sql = "UPDATE Pcelebrity SET `imageName`=?, `imageType`=?, `imageSize`=?, `imageDirectory`=?, `pCelebName`=?, `timeOfUpload`=? WHERE id=?";



            // Prepare statement
            $stmt = $conn->prepare($sql);


            // Bind parameters (assuming appropriate data types)
            $id = $_POST['id']; // Replace with the actual ID
            $uId = $_POST['uId']; // Replace with the actual ID

            $pCelebName = $_POST['pCelebName'];  

            $imageName = $_FILES['image']['name'];
            $imageType = $_FILES['image']['type'];
            $imageType = explode("/", $imageType);
            $imageType = end($imageType);
            $imageSize = (($_FILES['image']['size'])/1000)." KB"; // Size in bytes
            $imageDirectory = $_FILES['image']['tmp_name'];
            $old_directory=$_POST['directory'];
             
            $target_file = "image/celebs/". basename($imageName);
            move_uploaded_file($_FILES['image']['tmp_name'], $target_file);

             date_default_timezone_set("Asia/Kolkata");    
            $timeOfUpload = date("d-M-Y h:i:s:a"); 


            $stmt->bind_param("ssssssi",  $imageName, $imageType, $imageSize, $target_file,$pCelebName, $timeOfUpload, $id);

                unlink($old_directory);

            // Execute the statement
            if ($stmt->execute()) {
                // echo "Record updated successfully";
                header("Location:dashboard-P-View.php?msg=apd2blgs?id=$id&uId=$uId");
            } else {
                echo "Error updating record: " . $stmt->error;
            }
}


// Close statement and connection
$stmt->close();
$conn->close();
?>
