<?php
session_start();

$host="localhost";
$uname="root";
$pss="";
$db="final911_1";
 
 $con=mysqli_connect($host,$uname,$pss,$db) or die (mysqli_error());

?>