<!DOCTYPE html>
<html lang="en">
<head>
  <title>Admin Home</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>
<header>
<nav class="navbar navbar-expand-md bg-dark navbar-dark">
  <a class="navbar-brand" href="../admin/images/logonew.png">
  Sport e-Management</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item active">
		<a class="nav-link" href="../home.php">Home <span class="sr-only">(current)</span></a>
	  </li>
	  <li class="nav-item">
		<a class="nav-link" href="../aboutus.html">About us</a>
	  </li>
	  <li class="nav-item">
		<a class="nav-link" href="#">Contact Us</a>
	  </li>
	  <li class="nav-item">
		<a class="nav-link" href="../admin/logout.php">Logout</a>
	  </li>   
    </ul>
  </div>  
</nav>
</header>

<div class="jumbotron">
		<h1>Sport Management</h1>
		<p>Here admin can manage sport event and all kind of work at online.</p>
</div>


<section class="">
	
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-6 col-md-6 col-12 bg-light my-4">
			<h3 class="text-center display-5">Manage Game</h3>
				<a type="button" class="btn btn-outline-primary btn-block" href="Sport/addForm.html">Add Game</a>
				<a type="button" class="btn btn-outline-success btn-block" href="Sport/view.php">View Game List</a>
				<a type="button" class="btn btn-outline-info btn-block" href="#">Upadate Game</a>
				<a type="button" class="btn btn-outline-secondary btn-block" href="Sport/deleteForm.php">Delete Game</a>
				
				
			</div>
			<div class="col-lg-6 col-md-6 col-12 bg-light my-4">
				<h3 class="text-center display-5">Student Details</h3>
				<p class="py-4">Here admin can see how many student participated in events. Admin can see all the details of 
				Student and can easily manage.All the details are store in database and whenever needed, 
				details can be taken from the database.
				</p>
				<a type="button" class="btn btn-outline-success btn-block" href="Sport/viewStudent.php">View Student List</a>
			</div>
		</div>
	</div>	
</section>
	
	
<footer>
	<p class="p-3 text-center text-white bg-dark">&copy Sport Event Manegment System</p>
</footer>

</body>
</html>
