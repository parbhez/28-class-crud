<?php
// echo "get";
// print_r($_GET);
// echo "post";
// print_r($_POST);
// echo "request";
// print_r($_REQUEST);
// echo "server";
// print_r($_SERVER);
$message = "";
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	//echo "form is submitted";
	$name = $_POST['name'];
	$email = $_POST['email'];

	if ($name == "" || $email == "") {
		 // echo "<span style = 'color:red; font-size:18px;'>Field must not be Empty !!!!</span>";
		$message = "Field must not be Empty !!!!";
	} else {
	$con = mysqli_connect('localhost','root','','alldata');
	$insert = $con->query("insert into students(name,email) values('$name','$email')");
	

	if ($insert) {
    $message = "Data inserted successfully";
  } else {
    $message = "Something went wrong";
  }
}
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Form</title>
	<link rel="stylesheet" type="text/css" href="bootstrap.min.css">
</head>
<body class="bg-info">
	<div class="container mt-5">
		<div class="card">
			<div class="card-header">
				<h2>Add student</h2>
				<a href="index.php" class="btn btn-secondary">Home Page</a>
			</div>
			<div class="card-body">
			<?php if(!empty($message)):?>
        	<div class="alert alert-success">
          	<?php echo $message;?>
        	</div>
        	<?php endif;?>
				<form action="" method="post">
					<div class="form-group">
						<label for="name">Name</label>
						<input type="text" name="name" id="name" class="form-control">
					</div>

					<div class="form-group">
						<label for="email">Email</label>
						<input type="text" name="email" id="email" class="form-control">
					</div>

					<div class="form-group">
						<button type="submit" class="btn btn-outline-primary">Add student</button>
					</div>
				</form>
			</div>
		</div>
	</div>
</body>
</html>