<?php
include("connection.php");
$search=$_POST['search'];//defined before to use it in input value
?>


 <form action="search.php" method="POST">
     <input type="text" name="search" value="<?=$search?>">
     <input type="submit" value="search"><a href="new.php">new</a>
</form>
<table>
 <tr>
     <td>ID</td>
     <td>NAME</td>
     <td>LAST</td>
</tr>

<?php
$sql="SELECT id, names, lastName FROM user where names like '$search' '%'  order by id desc";
$query = mysqli_query($con,$sql);

if($query){
    $_SESSION['message']='FOUND';
    }
while($mostrar=mysqli_fetch_array($query)){
?>

<tr>
  <td><?php echo $mostrar['id']?></td>
  <td><?php echo $mostrar['names']?></td>
  <td><?php echo $mostrar['lastName']?></td> 
</tr>

<?php
}
?>

</table>

<?php if(isset($_SESSION['message'])){

echo $_SESSION['message']; 
   
}
session_unset(); ?><br>

<a href="index.php">back</a>

