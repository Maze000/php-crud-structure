<?php
include("connection.php");

$id=$_GET['id'];

$sql="DELETE FROM user where id like $id";
$query=mysqli_query($con,$sql);

if($query){
    $_SESSION['message']='DELETED';
    header("Location:index.php");   
}
?>