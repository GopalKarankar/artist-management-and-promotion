<?php session_start(); ?>

<?php

include "conn.php";

if (!isset($_FILES["image"]) || $_FILES["image"]["error"] == UPLOAD_ERR_NO_FILE) {


                // SQL statement with placeholders
                $sql = "UPDATE brands SET  `bDetails`=?, `timeOfUpload`=? WHERE id=?";



                // Prepare statement
                $stmt = $conn->prepare($sql);


                // Bind parameters (assuming appropriate data types)
                $id = $_POST['id']; // Replace with the actual ID
                $bDetails = $_POST['bDetails'];  


                 date_default_timezone_set("Asia/Kolkata");    
                $timeOfUpload = date("d-M-Y h:i:s:a"); 


                $stmt->bind_param("ssi",  $bDetails, $timeOfUpload, $id);


                // Execute the statement
                if ($stmt->execute()) {
                    // echo "Record updated successfully";
                    header("Location:dashboard-Brands.php?msg=apd2brnds");
                } else {
                    echo "Error updating record: " . $stmt->error;
                }
} else {


            // SQL statement with placeholders
            $sql = "UPDATE brands SET `imageName`=?, `imageType`=?, `imageSize`=?, `imageDirectory`=?, `bDetails`=?, `timeOfUpload`=? WHERE id=?";



            // Prepare statement
            $stmt = $conn->prepare($sql);


            // Bind parameters (assuming appropriate data types)
            $id = $_POST['id']; // Replace with the actual ID
            $bDetails = $_POST['bDetails'];  

            $imageName = $_FILES['image']['name'];
            $imageType = $_FILES['image']['type'];
            $imageType = explode("/", $imageType);
            $imageType = end($imageType);
            $imageSize = (($_FILES['image']['size'])/1000)." KB"; // Size in bytes
            $imageDirectory = $_FILES['image']['tmp_name'];
            $old_directory=$_POST['directory'];
             
            $target_file = "image/brands/". basename($imageName);
            move_uploaded_file($_FILES['image']['tmp_name'], $target_file);

             date_default_timezone_set("Asia/Kolkata");    
            $timeOfUpload = date("d-M-Y h:i:s:a"); 


            $stmt->bind_param("ssssssi",  $imageName, $imageType, $imageSize, $target_file, $bDetails, $timeOfUpload, $id);

                unlink($old_directory);

            // Execute the statement
            if ($stmt->execute()) {
                // echo "Record updated successfully";
                header("Location:dashboard-Brands.php?msg=apd2brnds");
            } else {
                echo "Error updating record: " . $stmt->error;
            }

}

// Close statement and connection
$stmt->close();
$conn->close();
?>
