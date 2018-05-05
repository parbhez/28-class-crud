<?php
	$con = mysqli_connect('localhost','root','','alldata');
	$student = $con->query("select * from students order by id desc");
?>

<!DOCTYPE html>
<html>
<head>
	<title>All Stucdent</title>
	<link rel="stylesheet" type="text/css" href="bootstrap.min.css">
</head>
<body>
		<div class="container mt-5">
			<div class="card">
				<div class="card-header">
					<h2>All Students</h2>
					<a href="form.php" class="btn btn-secondary">Add student</a>
				</div>
				<div class="card-body">
					<table class="table table-borderd">
						<tr>
							<th>No</th>
							<th>Name</th>
							<th>Email</th>
							<th>Action</th>
						</tr>
						<?php if($student):?>
						<?php	$i = 0; ?>
					<?php while($result = $student->fetch_object()) :?>
					<?php	$i++; ?>
						<tr>
							<td><?php echo $i;?></td>
							<td><?php echo $result->name;?></td>
							<td><?php echo $result->email;?></td>
							<td>
								<a class="btn btn-primary" href="edit.php?id=<?php echo $result->id;?>">Edit</a>
								<a onclick="return confirm('Are you sure want to delete now???')" class="btn btn-danger" href="delete.php?id=<?php echo $result->id; ?>">Delete</a>
							</td>
						</tr>
					<?php endwhile;?>
					<?php endif;?>
					</table>
				</div>
			</div>
		</div>
</body>
</html>