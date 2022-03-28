<?php
include('connection.php');

$name=$_POST['name'];
$last=$_POST['last'];

$sql="INSERT INTO user(names, lastName) VALUES ('$name', '$last')";
$query = mysqli_query($con,$sql);

if($query){
    $_SESSION['message']='INSERTED';
    header("Location:index.php");
}

?>