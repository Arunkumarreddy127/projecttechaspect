<?php 
include("connection.php");
$b=$_POST["b"];
$query="select *from database where planname='$b'";
$result=mysqli($con,$query);

?>
