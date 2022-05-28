<?php
	$server = "localhost";
	$user = "root";
	$password = "";
	$databasename = "appointments";

	$con = mysqli_connect($server,$user,$password,$databasename);
	if ($con) {
	//cho "connection okk";
}
else {
	echo "Connection failed".mysqli_connect_error();
}



?>