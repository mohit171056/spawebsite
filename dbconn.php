<?php
$server='localhost';
$user='root';
$password='';
$db='appoint';

$conn = mysqli_connect($server, $user, $password, $db);
if($conn){
	//echo "Connection made";

}else{
	echo "Connection fail";

}
?>