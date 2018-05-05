<?php 
$id = $_GET['id'];
$con = mysqli_connect("localhost","root","","alldata");
$delData = $con->query("delete from students where id=$id");
header("location: /?success=true");


?>