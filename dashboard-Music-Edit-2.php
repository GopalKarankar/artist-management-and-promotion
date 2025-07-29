<?php session_start(); ?>

<?php

include "conn.php";

if (!isset($_FILES["image"]) || $_FILES["image"]["error"] == UPLOAD_ERR_NO_FILE) {


            // SQL statement with placeholders
            $sql = "UPDATE music SET  `iframe`=?, `sTitle`=?, `sArtist`=?, `category`=?, `timeOfUpload`=? WHERE id=?";



            // Prepare statement
            $stmt = $conn->prepare($sql);


            // Bind parameters (assuming appropriate data types)
            $id = $_POST['id']; // Replace with the actual ID
            $iframe = $_POST['iframe'];  
            $sTitle = $_POST['sTitle'];  
            $sArtist = $_POST['sArtist'];  
            $category = $_POST['category'];  

             date_default_timezone_set("Asia/Kolkata");    
            $timeOfUpload = date("d-M-Y h:i:s:a"); 


            $stmt->bind_param("sssssi", $iframe, $sTitle, $sArtist, $category, $timeOfUpload, $id);

            // Execute the statement
            if ($stmt->execute()) {
                // echo "Record updated successfully";
                header("Location:Music-Videos.php?msg=apd2ml");
            } else {
                echo "Error updating record: " . $stmt->error;
            }




} else {


            // SQL statement with placeholders
            $sql = "UPDATE music SET `imageName`=?, `imageType`=?, `imageSize`=?, `imageDirectory`=?, `iframe`=?, `sTitle`=?, `sArtist`=?, `category`=?,  `timeOfUpload`=? WHERE id=?";



            // Prepare statement
            $stmt = $conn->prepare($sql);


            // Bind parameters (assuming appropriate data types)
            $id = $_POST['id']; // Replace with the actual ID
            $iframe = $_POST['iframe'];  
            $sTitle = $_POST['sTitle'];  
            $sArtist = $_POST['sArtist'];  
            $category = $_POST['category'];  

            $imageName = $_FILES['image']['name'];

            $imageType = $_FILES['image']['type'];
            $imageType = explode("/", $imageType);
            $imageType = end($imageType);
            $imageSize = (($_FILES['image']['size'])/1000)." KB"; // Size in bytes
            $imageDirectory = $_FILES['image']['tmp_name'];
            $old_directory=$_POST['directory'];
             
            $target_file = "image/music/". basename($imageName);
            move_uploaded_file($_FILES['image']['tmp_name'], $target_file);

             date_default_timezone_set("Asia/Kolkata");    
            $timeOfUpload = date("d-M-Y h:i:s:a"); 


            $stmt->bind_param("sssssssssi",  $imageName, $imageType, $imageSize, $target_file,$iframe, $sTitle, $sArtist, $category,  $timeOfUpload, $id);

                unlink($old_directory);

            // Execute the statement
            if ($stmt->execute()) {
                // echo "Record updated successfully";
                header("Location:Music-Videos.php?msg=apd2ml");
            } else {
                echo "Error updating record: " . $stmt->error;
            }



}



// Close statement and connection
$stmt->close();
$conn->close();
?>
