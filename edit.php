<?php

$id=$_GET['id'];
$name=$_GET['name'];
$last=$_GET['last'];

?>

 <form action="editCode.php" method="POST">
     <input  name="id"  type="text"  value="<?=$id?>"><br>
     <input type="text" name="name" placeholder="<?=$name?>"><br>
     <input type="text" name="last" placeholder="<?=$last?>"><br>
     <input type="submit" value="edit">
</form>
