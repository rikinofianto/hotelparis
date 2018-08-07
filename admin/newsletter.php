<?php

include ('db.php');
$eid = $_GET['eid'];
$approval ="Allowed";
$napproval="Not Allowed";

$view="select * from kontak where id = '$eid' ";
$re = mysqli_query($con,$view);
while ($row=mysqli_fetch_array($re))
{
    $id =$row['persetujuan'];

}

if($id=="Not Allowed")
{
    $sql ="UPDATE `kontak` SET `persetujuan`= '$approval' WHERE id = '$eid' ";
    if(mysqli_query($con,$sql))
    {
        echo '<script>alert("Kontak Ditambahkan") </script>' ;
        header("Location: messages.php");
    }
} else {
$sql ="UPDATE `kontak` SET `persetujuan`= '$napproval' WHERE id = '$eid' ";
    if(mysqli_query($con,$sql))
    {
        echo '<script>alert("Kontak Diperbarui") </script>' ;
        header("Location: messages.php");
    }



}
?>