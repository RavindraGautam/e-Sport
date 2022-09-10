<?php
$con=mysqli_connect('localhost','root');
mysqli_select_db($con,'sems_db');
$q="select * from stu_register";
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
		<h3 class="text-center">View Student Record</h3>
	</div>
<div class="container-flude">            
  <table class="table table-dark table-striped">
    <thead>
      <tr>
	    <th>StudentId</th>
        <th>Name</th>
        <th>Email</th>
        <th>Mobile No</th>
		<th>DOB</th>
		<th>Branch</th>
		<th>Year</th>
		<th>Gender</th>
		<th>Game Name</th>
		<th>Address</th>
      </tr>
    </thead>
	<?php
		for($i=1;$i<=$num;$i++){
			$row=mysqli_fetch_array($result);
	?>
    <tbody>
      <tr>
        <td><?php echo $row['studentid']; ?></td>
        <td><?php echo $row['uname']; ?></td>
        <td><?php echo $row['email']; ?></td>
		<td><?php echo $row['mobileno']; ?></td>
		<td><?php echo $row['dob']; ?></td>
		<td><?php echo $row['branch']; ?></td>
		<td><?php echo $row['year']; ?></td>
		<td><?php echo $row['gender']; ?></td>
		<td><?php echo $row['choosegame']; ?></td>
		<td><?php echo $row['address']; ?></td>
      </tr>
	   <?php
		}
	   ?>
      <tr>
    </tbody>
  </table>
</div>
</section>
</body>
</html>