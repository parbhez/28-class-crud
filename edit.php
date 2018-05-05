<?php 
$id = $_GET['id'];
$con = mysqli_connect("localhost","root","","alldata");
$data = $con->query("select * from students where id = $id");
$result = $data->fetch_object();
//print_r($result);


//print_r($_SERVER);
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	//echo "form submitted";
	$name = $_POST['name'];
	$email = $_POST['email'];
	// print_r($name);
	// print_r($email);
	$con->query("
		update students set
		 name = '$name',
		 email = '$email'
		 where id = $id");
	header("location: /");


	
}


?>

<!DOCTYPE html>
<html>
<head>
	<title>Edit</title>
	<link rel="stylesheet" type="text/css" href="bootstrap.min.css">
</head>
<body class="bg-info">
	<div class="container mt-5">
		<div class="card">
			<div class="card-header">
			<h2>All Student</h2>
				<div class="card-body">
					<form action="" method="post">
						<div class="form-group">
							<label for="name">Name</label>
						<input type="text" value="<?php echo $result->name ;?>" name="name" id="name" class="form-control">	
						</div>

						<div class="form-group">
							<label for="email">Email</label>
						<input type="text" value="<?php echo $result->email;?>" name="email" id="email" class="form-control">	
						</div>
						<div class="form-group">
							<button type="submit" class="btn btn-outline-success">Updated</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</body>
</html>