<?php
	session_start();
	$username=$_POST['username'];
	$password=$_POST['password'];
	$con=mysqli_connect('localhost','root');
	mysqli_select_db($con,'sems_db');
	$q="select * from logindb where username='$username' && password='$password'";
	echo "$q";
	$result=mysqli_query($con,$q);
	$num=mysqli_num_rows($result);
	if($num==1)
	{
		$_SESSION['username']=$username;
		header('location:http://localhost/e-Sport/admin/admin_home.php');
	}
	else{
		header('location:http://localhost/e-Sport/admin/login.php');
	}
	
?>