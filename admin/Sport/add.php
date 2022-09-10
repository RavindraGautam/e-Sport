<?php
$sportname=$_POST['sportname'];
$date=$_POST['date'];
$con=mysqli_connect('localhost','root');
mysqli_select_db($con,'sems_db');
$q="INSERT INTO sport(sportname,date) values('$sportname',$date)";
$status=mysqli_query($con,$q);
mysqli_close($con);
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Add Sport</title>
	</head>
	<body>
		<h2>Add New Game</h2>
		<p><?php
			if($status==1)
				echo'<script>alert("Insert successfully")</script>';
			else
				echo'<script>alert("Failed To Insert")</script>';
		?></p>
		<h3>Do you want insert more record </h3>
	  <a type="button" class="btn btn-info btn-block" href="addForm.html">Add New Records</a>
	  <h3>Go back to home page</h3>
		<a type="button" class="btn btn-info btn-block" href="../admin_home.php">Admin Home</a>
	</body>
</html>
