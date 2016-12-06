<?php 
	require "db_connect.php";
	$username=$_GET["username"];
	$passowrd=$_GET["password"];

	$sql = "select count(*) as count from users where username ='$username' and password ='$passowrd'";
	$res = $con->query($sql);
	mysqli_close($con);

	$row = $res->fetch_assoc();
	$bool = $row['count'];
	if($bool == 1){
		header('Location: http://localhost/LearningSite/Homepage.php');
		exit();
	}else{
		
		header('Location: http://localhost/LearningSite/login.php');
		exit();
	} 
?>