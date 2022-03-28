<?php
include("connection.php");

$id=$_POST['id'];
$name=$_POST['name'];
$last=$_POST['last'];

$sql="UPDATE user set names='$name', lastName='$last' where id like $id ";
$query = mysqli_query($con,$sql);

if ($query) {
    $_SESSION['message']='EDITED';
    header("Location:index.php");
}

?>
