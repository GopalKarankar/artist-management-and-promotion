<?php session_start(); ?>

<?php 
    include "conn.php";

    $id=$_GET['id'];

    $status="Seen";

    $sql="update contactus set status=? where id=?";

    $stmt=$conn->prepare($sql);

    $stmt->bind_param('si',$status,$id);

    if ($stmt->execute()) {
        header("Location:dashboard-Contact-Us-Seen.php?msg=apd2cu");  

    } else {
        echo "Query failed.";
    }
    


    $stmt->close();
    $conn->close();

?>