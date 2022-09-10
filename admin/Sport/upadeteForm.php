<?php
$con=mysqli_connect('localhost','root');
mysqli_select_db($con,'sems_db');
$q="select * from sport";
$result=mysqli_query($con,$q);
$num=mysqli_num_rows($result);
mysqli_close($con);
?>
<!DOCTYPE html>
<html>
	<head>
		<title>update Game </title>
		<link rel="stylesheet" href="./css/viewStyle.css" />
	</head>
	<body>
		<h2>Upade Game Record</h2>
		<form action="update.php" method="post">
		<table id="view_table">
			<tr>
				<th>Sport Id</th>
				<th>Name</th>
				<th>Date</th>
			</tr>
			<?php
			for($i=1;$i<=$num;$i++){
				$row=mysqli_fetch_array($result);
			?>
			<tr>
				<td><?php echo $row['bookid']; ?>
				<input type="hidden" name="sportid<?php echo $i ?>" value="<?php echo $row['sportid']; ?>" /></td>
				<td><input type="text" name="sportname<?php echo $i ?>" value="<?php echo $row['sportname']; ?>" /></td>
				<td><input type="text" name="date<?php echo $i ?>" value="<?php echo $row['date']; ?>" /></td>
			</tr>
			<?php
			}
			?>
		</table>
		<input type="submit" value="Update" />
		</form>
	</body>
</html>