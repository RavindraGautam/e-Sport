<?php
$uname=$_POST['uname'];
$email=$_POST['email'];
$mobileno=$_POST['mobileno'];
$dob=$_POST['dob'];
$branch=$_POST['branch'];
$year=$_POST['year'];
$gender=$_POST['gender'];
$choosegame=$_POST['choosegame'];
$address=$_POST['address'];

$con=mysqli_connect('localhost','root');
mysqli_select_db($con,'sems_db');
$q="INSERT INTO stu_register(uname,email,mobileno,dob,branch,year,gender,choosegame,address)
 values('$uname','$email','$mobileno','$dob','$branch','$year','$gender','$choosegame','$address')";
$status=mysqli_query($con,$q);
mysqli_close($con);
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Add Sport</title>
	</head>
	<body>
		<p><?php
			if($status==1)
				echo'<script>alert("Registertion Successfully")</script>';

			else
				echo'<script>alert("Registertion Failed")</script>';
		?></p>
		
	  <h3>Go back to home page</h3>
		<a type="button" class="btn btn-info btn-block" href="home.php"> Home</a>
	</body>
</html>
