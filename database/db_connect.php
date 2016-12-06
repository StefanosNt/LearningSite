<?php

$server="localhost";
$username="root";
$password="";
$db="sami";

$con = new mysqli($server,$username,$password,$db);
if ($con->connect_error){
	die("connection failed:" .$con->connect_error);
}
?>