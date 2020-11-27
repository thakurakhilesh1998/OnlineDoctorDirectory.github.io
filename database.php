<?php 
$db = mysqli_connect("localhost", "root", "", "counseling system");
if(!$db){
echo "<h1>DATABASE CONNECTION ERROR</h1>";
die();
}
?>