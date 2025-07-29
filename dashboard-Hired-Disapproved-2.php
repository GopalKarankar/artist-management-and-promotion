<?php session_start(); ?>

<?php 
	include "conn.php";

	$id=$_GET['id'];

	$status="Disapproved";

	$sql="update hired set status=? where id=?";

	$stmt=$conn->prepare($sql);

	$stmt->bind_param('si',$status,$id);

	if ($stmt->execute()) {
		header("Location:dashboard-Hired-Disapproved.php?msg=apd2ah");	

	} else {
		echo "Query failed.";
	}
	


	$stmt->close();
	$conn->close();

?>