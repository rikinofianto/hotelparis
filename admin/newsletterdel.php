<?php

include ('db.php');

$id=$_GET['eid'];
if($id=="")
{
echo '<script>alert("Maaf ! Salah Input") </script>' ;
		header("Location: messages.php");


}

else{
$view="DELETE FROM `kontak` WHERE id ='$id' ";

	if($re = mysqli_query($con,$view))
	{
		echo '<script>alert("Subscriber News Letter Dihapus") </script>' ;
		header("Location: messages.php");
	}


}







?>