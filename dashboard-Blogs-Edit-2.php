<?php session_start(); ?>

<?php

include "conn.php";

if (!isset($_FILES["image"]) || $_FILES["image"]["error"] == UPLOAD_ERR_NO_FILE) {

            // SQL statement with placeholders
            $sql = "UPDATE blogs SET  `bTitle`=?, `bPost`=?, `bCategory`=?, `timeOfUpload`=? WHERE id=?";



            // Prepare statement
            $stmt = $conn->prepare($sql);


            // Bind parameters (assuming appropriate data types)
            $id = $_POST['id']; // Replace with the actual ID
            $bTitle = $_POST['bTitle'];  
            $bPost = $_POST['bPost'];  
            $bCategory = $_POST['bCategory'];  


             date_default_timezone_set("Asia/Kolkata");    
            $timeOfUpload = date("d-M-Y h:i:s:a"); 


            $stmt->bind_param("ssssi",  $bTitle, $bPost, $bCategory, $timeOfUpload, $id);


            // Execute the statement
            if ($stmt->execute()) {
                // echo "Record updated successfully";
                header("Location:blogs.php");
            } else {
                echo "Error updating record: " . $stmt->error;
            }


} else {

            // SQL statement with placeholders
            $sql = "UPDATE blogs SET `imageName`=?, `imageType`=?, `imageSize`=?, `imageDirectory`=?, `bTitle`=?, `bPost`=?, `bCategory`=?, `timeOfUpload`=? WHERE id=?";



            // Prepare statement
            $stmt = $conn->prepare($sql);


            // Bind parameters (assuming appropriate data types)
            $id = $_POST['id']; // Replace with the actual ID
            $bTitle = $_POST['bTitle'];  
            $bPost = $_POST['bPost'];  
            $bCategory = $_POST['bCategory'];  

            $imageName = $_FILES['image']['name'];
            $imageType = $_FILES['image']['type'];
            $imageType = explode("/", $imageType);
            $imageType = end($imageType);
            $imageSize = (($_FILES['image']['size'])/1000)." KB"; // Size in bytes
            $imageDirectory = $_FILES['image']['tmp_name'];
            $old_directory=$_POST['directory'];
             
            $target_file = "image/blogs/". basename($imageName);
            move_uploaded_file($_FILES['image']['tmp_name'], $target_file);

             date_default_timezone_set("Asia/Kolkata");    
            $timeOfUpload = date("d-M-Y h:i:s:a"); 


            $stmt->bind_param("ssssssssi",  $imageName, $imageType, $imageSize, $target_file,$bTitle, $bPost, $bCategory, $timeOfUpload, $id);

                unlink($old_directory);

            // Execute the statement
            if ($stmt->execute()) {
                // echo "Record updated successfully";
                header("Location:blogs.php");
            } else {
                echo "Error updating record: " . $stmt->error;
            }
}


// Close statement and connection
$stmt->close();
$conn->close();
?>
