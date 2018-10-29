<?php
include("connection.php");
$planname=$_POST[planname];
$monthlyrental=$_POST[monthlyrental];
$freeinternet=$_POST[freeinternet];
$freecalls=$_POST[freecalls];
$freesmss=$_POST[freesmss];
$callcharges=$_POST[callcharges];
$smscharges=$_POST[smscharges];
$datacharges=$_POST[datacharges];
$roamingcharges=$_POST[roamingcharges];

$query="insert into database values('$planname','$monthlyrental','$freeinternet','$freecalls','$freesmss','$callcharges','$smscharges','$datacharges','$roamingcharges');"
$result=mysqli($con,$query);
if($result){
echo"data inserted";
}
?>