<?php session_start(); ?>

<?php

include "conn.php";

if (!isset($_FILES["image"]) || $_FILES["image"]["error"] == UPLOAD_ERR_NO_FILE) {


        // Bind parameters (assuming appropriate data types)
        $id = $_POST['id']; // Replace with the actual ID
        $name = $_POST['name'];  
        $role = $_POST['role'];  
        $details = $_POST['details'];  

         date_default_timezone_set("Asia/Kolkata");    
        $timeOfUpload = date("d-M-Y h:i:s:a"); 

        // SQL statement with placeholders
        $sql = "UPDATE `intro` SET `name`=?, `role`=?, `details`=?, `uploadTime`=? WHERE id=?";

        // Prepare statement
        $stmt = $conn->prepare($sql);


        $stmt->bind_param("ssssi", $name, $role, $details, $timeOfUpload, $id);



        // Execute the statement
        if ($stmt->execute()) {
            // echo "Record updated successfully";
            header("Location:artists-N-Booking.php?msg=apd2ti&uId=$id");
        } else {
            echo "Error updating record: " . $stmt->error;
        }

} else {

            // Bind parameters (assuming appropriate data types)
            $id = $_POST['id']; // Replace with the actual ID
            $name = $_POST['name'];  
            $role = $_POST['role'];  
            $details = $_POST['details'];  

            $imageName = $_FILES['image']['name'];
            $imageType = $_FILES['image']['type'];
            $imageType = explode("/", $imageType);
            $imageType = end($imageType);
            $imageSize = (($_FILES['image']['size'])/1000)." KB"; // Size in bytes
            $imageDirectory = $_FILES['image']['tmp_name'];
            $old_directory=$_POST['directory'];

                unlink($old_directory);

             
            $target_file = "image/intro/". basename($imageName);
            move_uploaded_file($_FILES['image']['tmp_name'], $target_file);

             date_default_timezone_set("Asia/Kolkata");    
            $timeOfUpload = date("d-M-Y h:i:s:a"); 

            // SQL statement with placeholders
            $sql = "UPDATE `intro` SET `imageName`=?, `imageType`=?, `imageSize`=?, `imageDirectory`=?, `name`=?, `role`=?, `details`=?, `uploadTime`=? WHERE id=?";

            // Prepare statement
            $stmt = $conn->prepare($sql);


            $stmt->bind_param("ssssssssi",  $imageName, $imageType, $imageSize, $target_file,$name, $role, $details, $timeOfUpload, $id);



            // Execute the statement
            if ($stmt->execute()) {
                // echo "Record updated successfully";
                header("Location:artists-N-Booking.php?msg=apd2ti&uId=$id");
            } else {
                echo "Error updating record: " . $stmt->error;
            }
}


// Close statement and connection
$stmt->close();
$conn->close();
?>
