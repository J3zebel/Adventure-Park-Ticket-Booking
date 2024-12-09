<?php
$server="localhost";
$username="root";
$password="";
$db="db_onlinebook";
$conn=mysqli_connect($server,$username,$password,$db);
if(!$conn)
{
	echo "error";
}
?>