<?php
$con=mysqli_connect('localhost','root');
mysqli_select_db($con,'sems_db');
$q="select * from sport";
$result=mysqli_query($con,$q);
$num=mysqli_num_rows($result);
mysqli_close($con);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>view Student</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>
<section class="my-4">
	<div class="py-5">
		<h3 class="text-center">Delete Sport Record</h3>
	</div>
<div class="container">          
  <form action="deletion.php" method = "post">
  <table class="table table-dark table-striped">
    <thead>
      <tr>
	    <th>Sport Id</th>
		<th>Name</th>
		<th>Date</th>
      </tr>
    </thead>
	<?php
		for($i=1;$i<=$num;$i++){
			$row=mysqli_fetch_array($result);
		?>
    <tbody>
      <tr>
		<td><?php echo $row['sportid']; ?></td>
		<td><?php echo $row['sportname']; ?></td>
		<td><?php echo $row['date']; ?></td>
		<th><input type="checkbox" value="<?php echo $row['sportid']?>" name="b<?php echo $i; ?>" /></th>
	 </tr>
		<?php
		}
		?>
      <tr>
	  <tr>
	    <th colspan="5"><input type="submit" class="text-center" value="Delete"/></th>
	  </tr>
    </tbody>
  </table>
  </form>
</div>
</section>
</body>
</html>