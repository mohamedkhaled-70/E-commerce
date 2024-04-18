<?php
include("connect.php");
$id=$_POST['ID'];
 $sql="UPDATE  message  SET stutus = 1 WHERE id=$id";
 $conn->query($sql);
 
 if ($sql) {
 	echo "success"; 
 }

?>