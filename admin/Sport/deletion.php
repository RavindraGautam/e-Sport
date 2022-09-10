<?Php
$size=sizeof($_POST);
$j=1;
for($i=1;$i<=$size;$i++,$j++){
	$index="b".$j;
	if(isset($_POST[$index]))
	   $s_id[$i]=$_POST[$index];
    else
		$i--;
}
$con=mysqli_connect('localhost','root');
mysqli_select_db($con,'sems_db');
for($k=1;$k<=$size;$k++)
{
  $q="delete from sport where sportid=".$s_id[$k];
  mysqli_query($con,$q);
}
mysqli_close($con);
?>
<!DOCTYPE html>
<html>
	<head><title>Deletion</title></head>
	<body>
		<p>
			<?php
				echo $size."Record Deleted";
			?>
		</p>
		<h4>Go back to home page</h4>
		<a type="button" class="btn btn-info btn-block" href="../admin_home.php">Admin Home</a>
	</body>
</html>