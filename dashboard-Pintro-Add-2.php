<?php session_start(); ?>

<?php

include "conn.php";

// Bind parameters (assuming appropriate data types)
$uId = $_POST['uId'];  
$sQual = $_POST['sQual'];  
$sDetails = $_POST['sDetails'];  

echo $uId;
echo $sQual."<br>";
echo $sDetails;

    $sql2="select * from intro where id=?";

    $stmt2=$conn->prepare($sql2);   

    $stmt2->bind_param('i',$uId);

    $stmt2->execute();

    // Get result 
    $result2=$stmt2->get_result();

            // Fetch data
          while($data2=$result2->fetch_assoc())
        {
                $sName=$data2['name'];
                $imageName = $data2['imageName'];
                $imageType = $data2['imageType'];
                $imageSize = $data2['imageSize']; // Size in bytes
                $imageDirectory = $data2['imageDirectory'];

         }   

 date_default_timezone_set("Asia/Kolkata");    
$timeOfUpload = date("d-M-Y h:i:s:a"); 


// SQL insert query with prepared statement
$sql = "INSERT INTO `pintro` (`uId`, `imageName`, `imageType`, `imageSize`, `imageDirectory`, `sName`, `sQual`, `sDetails`, `timeOfUpload`)  VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)";

$stmt = $conn->prepare($sql);

// Bind parameters
$stmt->bind_param("issssssss", $uId,  $imageName, $imageType, $imageSize, $imageDirectory, $sName, $sQual, $sDetails, $timeOfUpload);


        // Execute statement
        if ($stmt->execute()) {
            // echo "New record inserted successfully.";
                header("Location:dashboard-Pabout-Add.php?msg=apd2pabout&uId=$uId");

        } else {
            echo "Error: " . $stmt->error;

        }

// Close statement and connection
$stmt->close();
$conn->close();


?>
