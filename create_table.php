<?php

$con = mysqli_connect('localhost','root','','alldata');
$con->query("
	create table students(
	id serial,
	name varchar(255) not null,
	email varchar(255)

	);


	");

