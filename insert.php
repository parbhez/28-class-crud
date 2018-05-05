<?php
	$con = mysqli_connect('localhost','root','','alldata');
	$con->query("insert into students(name,email) values('parbhez','parbhez@gmail.com'),('masud','masud@gmail.com')");



?>