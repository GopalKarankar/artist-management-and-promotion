<?php session_start(); ?>

<?php 
    include "conn.php";

    $id=$_GET['id'];

    $eventID=$_GET['eventID'];

    $status="Confirmed";

    $sql="update ticket set status=? where id=?, eventID=?";

    $stmt=$conn->prepare($sql);

    $stmt->bind_param('sii',$status,$id,$eventID);

    if ($stmt->execute()) {
        header("Location:dashboard-Book-Confirmed.php?msg=apd2dbt");  

    } else {
        echo "Query failed.";
    }
    


    $stmt->close();
    $conn->close();

?>