<?php

include ('db.php');
$eid = $_GET['id'];
$approval ="Allowed";
$napproval="Not Allowed";

$view="select * from newsletter where id = '$eid' ";
$re = mysqli_query($con,$view);

while ($row=mysqli_fetch_array($re))
{
	

	$id =$row['approval'];

}

if($id=="Not Allowed")
{
	$sql ="UPDATE `newsletter` SET `approval`= 'Allowed' WHERE id = '".$eid."'";
	if(mysqli_query($con,$sql)){
	
		echo '<script>alert("news letter approved") </script>' ;
		header("Location: messages.php");
	}else {
		echo '<script>alert("error...") </script>' ;
	}
}
else {
$sql ="UPDATE `newsletter` SET `approval`= 'Not Allowed' WHERE id = '$eid' ";
	if(mysqli_query($con,$sql))
	{
		echo '<script>alert("New Room Added") </script>' ;
		header("Location: messages.php");
	}
	else {
		echo '<script>alert("New Room Added 333") </script>' ;
	}
	}




?>