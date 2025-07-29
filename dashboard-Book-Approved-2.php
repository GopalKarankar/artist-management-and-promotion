<?php session_start(); ?>

<?php 
    include "conn.php";

    $id=$_GET['id'];

    $status="Approved";

    $sql="update bookshow set status=? where id=?";

    $stmt=$conn->prepare($sql);

    $stmt->bind_param('si',$status,$id);

    if ($stmt->execute()) {
        header("Location:dashboard-Book-Approved.php?msg=apd2dba");  

    } else {
        echo "Query failed.";
    }
    


    $stmt->close();
    $conn->close();

?>